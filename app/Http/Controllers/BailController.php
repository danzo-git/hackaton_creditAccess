<?php

namespace App\Http\Controllers;
use App\Client;
use App\Dossier;
use App\User;
use App\Contrat;
use \App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\role;
class BailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function accueil(){

        return view('accueil');
    }
    public function demande(){
        return view("form");
    }

        public function dash(){
                $client=\DB::select('select * from clients', [1]);


                return view('credit_dash')->with('client',$client);
        }

     public function valider($id){

         $doc=\DB::table('dossiers')->where('id_client',$id)->first();



       // $client=\DB::select('select * from clients where id='.$id);
        $clients= \DB::table('clients')->get()->where("id",$doc->id)->first();
//         dd($clients,$doc);
        //$clients->update(['isclient'=>1]);
        $r=\DB::table('clients')->where('id',$id)->update(['isclient'=>1]);
//         \DB::table('comptes')->where('id_client',$id)->insert(["credit"=>0,'id_client'=>$id]);
        //  dd($clients->email);
   $this->mailsend($clients->mdp,$clients->email,$doc->montant);
\DB::table('comptes')->where('id_client',$id)->update(["credit"=>$doc->montant,'id_client'=>$id]);
//dd($doc->montant);
        return redirect()->back();

     }
     public function bloquer($id){

        // $client=\DB::select('select * from clients where id='.$id);
         $clients= \DB::table('clients')->get()->where('id',$id)->first();

         //$clients->update(['isclient'=>1]);
         $r=\DB::table('clients')->where('id',$id)->update(['isclient'=>0]);

         //  dd($clients->email);
     //$this->mailsend($clients->mdp,$clients->email);

         return redirect()->back()->with("msg","ce compte est bloqué");

      }

      public function liste(){
        // $clients=\DB::select('select nom from clients where isclient=1', [1]);
     // $clients= \DB::table('clients')->where('isclient',1)->first();

          $clients=\DB::select('select * from clients', [1]);
          return view('liste',compact('clients'));
      }




    public function connexion(){
        return view('connexion');
    }


    public function connexion_client(request $request ){
        //&& Client::where('mdp',$request->mdp)->exists()

     if(Client::where('email', $request->email)->exists()  &&
        Client::where('mdp',$request->mdp)->exists() &&  Client::where('isclient',1)){

            $client= \DB::table('clients')->get()->where('email',$request->email)->first();
            //dd($clients);
          //$id=intval(['id'=>$client->id]);
                
        return redirect()->route("client.info", $client->id);
     }
     else{
         return redirect()->route('form.connexion');
     }

    }

    public function client($id){
        $clients= \DB::table('clients')->get()->where('id',$id)->first();




         return view('client')->with(['clients'=>$clients]);
     }








    // }
    public function insertion(request $request){
        // \DB::insert('insert into clients (nom,prenom,cni,date_naissance,lieu_naissance,profession,sexe,photo,email,telephone,solde,mdp) values ($request->nom,$request->prenom,$request->cni,$request->date_naissance,$request->lieu_naissance,$request->profession,
        // $request->sexe,$request->photo,$request->email,$request->solde,$request->mdp)');
          //

        \DB::table('clients')->insert([
        "prenom"=>$request->prenom,
        'nom'=>$request->nom,
        'naissance'=>$request->naissance,


        'profession'=>$request->profession,
        'sexe'=>$request->sexe,
        'cni'=>$request->cni,
        'matrimoniale'=>$request->matrimoniale,
        'regime'=>$request->regime,
        'sexe'=>$request->sexe,
        'sexe_con'=>$request->sexe_con,
        'date_conjoint'=>$request->date_conjoint,
        'dependants'=>$request->dependants,
        'nom_conjoint'=>$request->nom_conjoint,
        'prenom_conjoint'=>$request->prenom_conjoint,
        'profession'=>$request->profession,
        'adresse'=>$request->adresse,
        'salaire'=>$request->salaire,
        'telephone'=>$request->telephone,
        'com_naiss'=>$request->com_naiss,
        'com_naiss_con'=>$request->com_naiss_con,
        'com_res'=>$request->com_res,
        'com_res_con'=>$request->com_res_con,
        'nationalite'=>$request->nationalite,
        'email'=>$request->email,
        'telephone'=>$request->telephone,
        'isclient'=>0,
        'mdp'=> Str::random(3).''.rand( 10000, 99999 ),

         // $this->mailsend($request->email, $request->nom);
    //    \app\Http\Controllers\clientController\mailsend();
    ]);
   // $clients= \DB::table('clients')->where('id', $request->id)->first();
        $clients=Client::orderBy('id', 'desc')->first()->id;

//


     \DB::table('comptes')->insert([

         'id_client'=>$clients,
         'credit'=>0,
        // "id_dossier"=>1,

            "reste_payer"=>0,
             'montant_rembourser'=>0,
             'debit'=>0,


         ]);
//        $id_dossier=\DB::table("dossiers")
//            ->join('comptes','dossiers.id',"=","comptes.id_dossier")
//            ->select("comptes.id_dossier")
//            ->get();
//        dd($id_dossier);

        return redirect()->back()->with('info','inscription reussie vous recevrez vos informations par mail si la demande est accepté !!!');

    }



        // $this->mailsend($request->email, $request->nom);
    //    \app\Http\Controllers\clientController\mailsend();



// info_client



    public function mailsend($mdp,$email,$montant){

        $details=[
            'nom'=>"CreditAccess Agence",
            'title'=>'CreditAccess',
            'body'=>'ceci est votre code d activation',
            'mdp'=>$mdp,
            'montant'=>$montant,

        ];
       // \DB::select('select email from client where id_client ='.$clients->id);
    //    $clients= \DB::table('clients')->latest('id')->first();
      // dd($clients->email);
       \Mail::to($email)->send(new SendMail($details)) ;
        return view('home');
    }

public function credit(){
    $queries= \DB::table('clients')
        ->join('comptes', 'clients.id', '=', 'comptes.id_client')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('comptes.credit', "clients.nom",
            "clients.id",
            "comptes.montant_rembourser"
        )
        ->get();



    return view('contrat')->with('queries',$queries);
}

public function agent(){
    $users= User::all();
    return view("agent")->with('users',$users);
}


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDossier(request $request )
    {
        \DB::table('dossiers')->insert([
            "montant"=>$request->montant,
            "status"=>0,
            "id_recouvreur"=>0,
            'bulletin'=>$request->bulletin,
            //'but_credit'=>$request->but_credit,
            'date_debut'=>$request->date_debut,
            "but_credit"=>$request->but_credit,
            "credit"=>$request->credit,
            "partenaire"=>$request->partenaire,
            "benef"=>$request->benef,
            "situation"=>$request->situation,
            "id_client"=>$request->id_client,
            'date_fin'=>$request->date_fin,

            // 'lieu'=>$request->lieu,

        ]);
        return redirect()->back()->with('info','soumission  reussie vous recevrez vos informations par mail si la demande est accepté !!!');
    }


    public function edit(User $user)
    {
        Gate::define('manage-users',function($users){
            return $users->hasAnyRole(['auteur','admin']);
        });
        if (Gate::denies('edit-users')) {
            // dd("llo");
           return redirect()->route('admin.users.index')->with('info','vous ne possedez pas ce privilege');
        }


        $roles=role::all();
       return view('admin.users.edit',['user'=>$user,
            'roles'=>$roles
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->roles);
        $user->roles()->sync($request->roles);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect()->route("admin.users.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')) {
            return redirect()->route('admin.users.index')->with('info','vous ne possedez pas ce privilege');
         }
        $user->roles()->detach();
       $user->delete();
       return redirect()->route("admin.users.index");
    }


    public function demande_credit($id){

        return view('demande_credit')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valide(request $request)
    {

        //$clients= \DB::table('clients')->get()->where('id',$id)->first();
       // dd($clients);
        //$contrat=Client::find($id)->first();
        //dd($contrat);
        \DB::table('contrats')->insert([


            'fnom'=>$request->fnom,
        'id_client'=>$request->id_clientq,
        'fmail'=>$request->fmail,
        'fphone'=>$request->fphone,
    'designation'=>$request->designation,
    'type_materiel'=>$request->type_materiel,
    'marque'=>$request->marque,
    // 'categorie'=>$request->categorie,
    'loyer'=>$request->loyer,
        ]);

        return redirect()->route('client.info',[$request->id_client])->with('msg','vous venez de soumettre une demande');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $client=Client::find($id);
        return view('pages.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update2(Request $request, $id)
    {
        $client=Client::find($id);
        $client->update($request->all());


        return redirect()->route('client.index')->with('info','super modification');
    }



public function dossier(){


   $queries= \DB::table('clients')
        ->join('dossiers', 'clients.id', '=', 'dossiers.id_client')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('clients.nom', "clients.isclient",
           "clients.id", 'dossiers.but_credit',
           "dossiers.montant","dossiers.date_fin",
       "dossiers.status")
        ->get();
//   if($queries->date_fin->get()<now()){
//       $status=\DB::table('dossiers')->update(['status'=>1]);
//   }
        return view('dossier',compact("queries"));

}

    public function dossier_accueil(){


        $queries= \DB::table('clients')
            ->join('dossiers', 'clients.id', '=', 'dossiers.id_client')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('clients.nom', "clients.isclient",
                "clients.id", 'dossiers.but_credit',
                "dossiers.montant","dossiers.date_fin",
                "dossiers.status")
            ->get();
//   if($queries->date_fin->get()<now()){
//       $status=\DB::table('dossiers')->update(['status'=>1]);
//   }
        return view('credit_dash',compact("queries"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }

    public function verifie_status($id){
        $status=\DB::table("dossiers")->first();
       // dd($status->status);
        if($status->date_fin<now()){
        \DB::table('dossiers')->where('id',$id)->update(['status'=>1]);
            $status=\DB::table('dossiers')->get()->where('id',$id)->first();
           // $stat;

            return redirect()-> back()->with('message','le delai a ete depassé');
        }else{
          $stat=  \DB::table('dossiers')->where('id',$id)->update(['status'=>0]);

            return redirect()-> back()->with('message','le delai a ete depassé',compact('stat'));
        }

    }

    public function remboursement(Request $request){
        $ancien_mtn=\DB::Table('comptes')->where("id_client",$request->id)->first();

        \DB::table('comptes')->where("id_client",$request->id)->update([

            "montant_rembourser"=>$request->montant_rembourser+$ancien_mtn->montant_rembourser,
        ]);
//        \DB::table('comptes')->where("id_client",$request->id)->update([
//
//            "credit"=>$request->montant_rembourser,
//        ]);
        return redirect()->back()->with('info',"un remboursement effectué");
    }

    public function store_recouvreur(request $request){

        \DB::table('recouvreurs')->insert([


            'nom'=>$request->nom,
            'prenom'=>$request->prenom,

        ]);
        return redirect()->back();

    }
    public function recouvreurs(request $request){


        return view('recouvreurs');

    }

    public function choix_recouvreurs($id,$rec)
    {

        // dd($id);
        \DB::table('dossiers')->where("id_client", $id)->update([

            "id_recouvreur" => $rec,
        ]);
        return back();
    }
     
    
    public function demandeCredit(){
            return view('credit');
            
    }

public function profile($id){
   
// dd($queries);
$clients=\DB::table('clients')->where('id',$id)->get();
// dd($clients);
$comptes=\DB::table('comptes')->where('id',$id)->get();

$dossiers=\DB::table('dossiers')->where('id_client',$id)->get();
    return view('profile',compact("dossiers","comptes","clients"));
}

}


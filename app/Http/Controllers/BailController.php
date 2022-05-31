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
         $queries= \DB::table('clients')->where('id',$id)
             ->get();
         $doc=\DB::table('dossiers')->where('id',$id)->get();
           //->join('dossiers', 'clients.id', '=', 'dossiers.id_client')
        //->join('orders', 'users.id', '=', 'orders.user_id')
           // ->select('clients.nom',  'dossiers.but_credit',"dossiers.montant")
             //->where('id',$id)

         dd($doc);
       // $client=\DB::select('select * from clients where id='.$id);
        $clients= \DB::table('clients')->get()->where("id",$id)->first();

        //$clients->update(['isclient'=>1]);
        $r=\DB::table('clients')->where('id',$id)->update(['isclient'=>1]);

        //  dd($clients->email);
    $this->mailsend($clients->mdp,$clients->email,$queries->montant);

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

      $clients=Client::where('isclient',1)->get();
      // dd($clients->id);
          return view('liste',compact('clients'));
      }

     public function fournisseur(){
         return view('fournisseur');
     }

    //  public function isclient(){
    //      //on recupere dans la bdd
    //      //si on veut le connecter on verifie

    //      if(\DB::table('clients')->get()->where('isclient',1)){
    //         return redirect()->route('connexion');

    //      }
    //  }
    public function connexion(){
        return view('connexion');
    }


    public function connexion_client(request $request ){
        //&& Client::where('mdp',$request->mdp)->exists()

     if(Client::where('email', $request->email)->exists()  &&
        Client::where('mdp',$request->mdp)->exists()){

            $client= \DB::table('clients')->get()->where('email',$request->email)->first();
            //dd($clients);
           $id=intval(['id'=>$client->id]);

        return redirect()->route("client.info", $client->id);
     }
     else{
         return redirect()->route('form.connexion');
     }

    }

    public function client($id){
        $clients= \DB::table('clients')->get()->where('id',$id)->first();
        // $contrat=Contrat::all();
       $contrat= \DB::table('contrats')->where('id_client',$clients->id)->get();


         return view('client')->with(['clients'=>$clients]);
     }



       public function facture($id){
        $clients= \DB::table('clients')->get()->where('id',$id)->first();
        // dd($clients->id);
        $contrat=Contrat::find($id);
        return view('facture',compact( 'contrat','clients'));


    }


    // public function affiche_facture($id){
    //    $contrat= Contrat::find($id);
    //    dd($contrat);

    // }
    public function insertion(request $request){
        // \DB::insert('insert into clients (nom,prenom,cni,date_naissance,lieu_naissance,profession,sexe,photo,email,telephone,solde,mdp) values ($request->nom,$request->prenom,$request->cni,$request->date_naissance,$request->lieu_naissance,$request->profession,
        // $request->sexe,$request->photo,$request->email,$request->solde,$request->mdp)');
          //

        \DB::table('clients')->insert([
        "prenom"=>$request->prenom,
        'nom'=>$request->nom,
        'naissance'=>$request->naissance,

        // 'lieu'=>$request->lieu,
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
        // 'res_con'=>$request->res_con,
        // 'cni'=>$request->cni,


        // 'enfant'=>$request->enfant,
        // 'photo'=>$request->photo=$imageName,

        'email'=>$request->email,
        'telephone'=>$request->telephone,
        'isclient'=>0,
        'mdp'=> Str::random(3).''.rand( 10000, 99999 ),
        // 'solde'=>0,
        //  'mdp'=>$request->mdp,
        // 'created_at'=>now()
         // $this->mailsend($request->email, $request->nom);
    //    \app\Http\Controllers\clientController\mailsend();
    ]);
    // $clients= \DB::table('clients')->get()->where('id',$id)->first();


    // $contrat=Contrat::orderBy('id', 'desc')->first()->id;

    // \DB::table('materiel_demandes')->insert([
    //     'id_contrat'=>$contrat,
    //     'id_client'=>$clients,
    //     'fnom'=>$request->fnom,
    //         'id_client'=>$clients,
    //         'fmail'=>$request->fmail,
    //         'fphone'=>$request->fphone,
    //     'designation'=>$request->designation,
    //     'type_materiel'=>$request->type_materiel,
    //     'marque'=>$request->marque,
    //     'nom'=>'',
    //     // 'categorie'=>$request->categorie,
    //     'loyer'=>$request->loyer,
    //     ]);

        return redirect()->route('accueil')->with('info','inscription reussie vous recevrez vos informations par mail si la demande est accepté !!!');

    }
    public function finsertion(request $request){

          //

        \DB::table('fournisseurs')->insert(["nom_prenom"=>$request->nom_prenom,

        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
        'email'=>$request->email,
        'pays'=>$request->pays,
        'isfournisseur'=>0,
        'mdp'=>$request->mdp
    ]);


        // $this->mailsend($request->email, $request->nom);
    //    \app\Http\Controllers\clientController\mailsend();


    }
// info_client

    public function dash_fournisseur(){
        return view('dash_fournisseur');
    }

    public function mailsend($mdp,$email){

        $details=[
            'nom'=>"CreditBail Agence",
            'title'=>'CreditBail',
            'body'=>'ceci est votre code d activation',
            'mdp'=>$mdp,

        ];
       // \DB::select('select email from client where id_client ='.$clients->id);
    //    $clients= \DB::table('clients')->latest('id')->first();
      // dd($clients->email);
       \Mail::to($email)->send(new SendMail($details)) ;
        return view('home');
    }

public function contrat(){
    $client=\DB::select('select * from clients', [1]);


    return view('voir_contrat')->with('client',$client);
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
            'bulletin'=>$request->bulletin,
            //'but_credit'=>$request->but_credit,
            'date_debut'=>$request->date_debut,
            "but_credit"=>$request->but_credit,
            "credit"=>$request->credit,
            "partenaire"=>$request->partenaire,
            "benef"=>$request->benef,
            "situation"=>$request->situation,
            "id_client"=>$request->id_client,

            // 'lieu'=>$request->lieu,

        ]);
        return redirect()->back()->with('info','inscription reussie vous recevrez vos informations par mail si la demande est accepté !!!');
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
//    $query = $butCredit ? Dossier::whereSlug($butCredit)->firstOrFail()->Client() : Client::query();
//    $client = $query->oldest('nom')->paginate(5);
//        $dossier=Dossier::all();
       // $client=Client::where();

   $queries= \DB::table('clients')
        ->join('dossiers', 'clients.id', '=', 'dossiers.id_client')
//        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('clients.nom', "clients.id", 'dossiers.but_credit',"dossiers.montant")
        ->get();
        return view('dossier',compact("queries"));

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
}

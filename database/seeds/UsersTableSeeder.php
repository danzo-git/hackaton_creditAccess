<?php

use App\role;
use App\User;
use Illuminate\Database\Seeder;
// use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       DB::table('role_user')->truncate();
//on  cree des donnees fakes pour peuple la bd on defini un utilisateur par son nom son mail et son mdp
      $admin= User::create([
           'name'=>'admin',
           'email'=>'denzel@admin.com',
           'password'=>Hash::make('password')
       ]);
//
      $auteur= User::create([
        'name'=>'auteur',
        'email'=>'demau@admi.com',
        'password'=>Hash::make('password')
    ]);


    $utilisateur=User::create([
        'name'=>'utilisateur',
        'email'=>'saamad@admin.com',
        'password'=>Hash::make('password')
    ]);
    /*
        une requete permettant de definir le role de celui qui est cree
    */
    $adminRole=role::where('name','admin')->first();
    $auteurRole=role::where('name','auteur')->first();
    $utilisateurRole=role::where('name','utilisateur')->first();



    $admin->roles()->attach($adminRole);
    $utilisateur->roles()->attach($utilisateurRole);
    $auteur->roles()->attach($auteurRole);
    }


}

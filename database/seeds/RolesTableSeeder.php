<?php

use App\role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permet de vider la table
        role::truncate();

        role::create(['name'=>'admin']);
        role::create(['name'=>'auteur']);
        role::create(['name'=>'utilisateur']);



    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('naissance');
            $table->string('com_naiss');
            $table->string('com_res');
            $table->string('telephone');
            $table->string('adresse');
            // $table->string('cni');
            $table->string('regime');
            $table->string('sexe');
            $table->string('nationalite');
            // $table->string('profession');
            $table->string('nom_conjoint');
            $table->string('prenom_conjoint');
            $table->string('sexe_con');
            
            $table->date('date_conjoint');
            $table->string('dependants');
            $table->string('mdp');
            $table->string('profession');
            $table->string('com_naiss_con');
            $table->string('salaire');
            $table->string('com_res_con');
            // $table->string('res_con');
            $table->string('cni');
            $table->String('matrimoniale');



            $table->string('email')->unique();
            $table->boolean('isclient');
            // $table->string('matrimoniale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

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
            $table->string('lieu');
            $table->string('telephone');
           // $table->string('adresse');
            $table->string('piece');
            $table->string('regime');
            $table->string('sexe');
            $table->string('enfant');
            $table->string('profession');
            $table->string('profession_conjoint');

            $table->string('mdp');
            $table->string('employeur');
            $table->string('adresse_pro');
            $table->string('salaire');
            $table->string('phone_bureau');


            $table->string('email')->unique();
            $table->boolean('isclient');
            $table->string('matrimoniale');
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

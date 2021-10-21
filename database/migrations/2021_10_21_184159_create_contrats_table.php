<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_client');
            $table->string('designation');
            $table->string('type_materiel');
            $table->string('marque');
         //  $table->string('categorie');
            $table->string('loyer');

            $table->string('fnom');
            $table->string('fmail')->unique();
            $table->string('fphone');
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
        Schema::dropIfExists('contrats');
    }
}

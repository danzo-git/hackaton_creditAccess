<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("montant");
            $table->string("bulletin");
            //$table->string("but");
            $table->date('date_debut');
            $table->string("but_credit");
            $table->string("credit");
            $table->string("partenaire");
            $table->string("benef");
            $table->string("situation");
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');


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
        Schema::dropIfExists('dossiers');
    }
}

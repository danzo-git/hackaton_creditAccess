<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('credit');
            $table->Integer('debit');
            $table->Integer('montant_rembourser');
            $table->Integer('reste_payer');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');

//            $table->unsignedBigInteger('id_dossier');
//            $table->foreign('id_dossier')
//                ->references('id')
//                ->on('dossiers')
//                ->onDelete('restrict')
//                ->onUpdate('restrict');

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
        Schema::dropIfExists('comptes');
    }
}

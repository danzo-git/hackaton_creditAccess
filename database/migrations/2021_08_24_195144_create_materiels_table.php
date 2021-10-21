<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
           // $table->string('type_mobilier');
            $table->string('fnom');
            $table->string('contact');
            
            $table->string('marque');
            $table->string('status');
            $table->string('type_materiel');
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
        Schema::dropIfExists('materiels');
    }
}

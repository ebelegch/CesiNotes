<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('piloteNom');
            $table->string('pilotePrenom');
            $table->string('piloteEmail');
            $table->string('piloteMotDePasse');
            $table->integer ('idFiliere');
            $table->foreign('idFiliere')
            ->references('id')->on('Filiere')
            ->onDelete('cascade');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilotes');
    }
}

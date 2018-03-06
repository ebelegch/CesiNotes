<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Eleve;
use App\Module;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noteValeur');
            $table->integer ('idEleve');
            $table->foreign('idEleve')
            ->references('id')->on('Eleve')
            ->onDelete('cascade');
            $table->integer ('idModule');
            $table->foreign('idModule')
            ->references('id')->on('Module')
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
        Schema::dropIfExists('notes');
    }
}

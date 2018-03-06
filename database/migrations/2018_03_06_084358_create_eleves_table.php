<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Eleve;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eleveNom');
            $table->string('elevePrenom');
            $table->string('eleveEmail');
            $table->string('eleveMotDePasse');
            $table->integer ('idPromotion');
            $table->foreign('idPromotion')
            ->references('id')->on('Promotion')
            ->onDelete('cascade');
            $table->integer ('idFiliere');
            $table->foreign('idFiliere')
            ->references('id')->on('Filiere')
            ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('eleves');
    }
}

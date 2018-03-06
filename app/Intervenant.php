<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
    //
    protected $fillable = ['intervenantNom', 'intervenantPrenom','intervenantEmail','intervenantMotDePasse','filiere_id'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Eleve extends Model
{
    //
    use Notifiable;
    //public $table = "Eleve";
    
    protected $fillable = ['eleveNom', 'elevePrenom','eleveEmail','eleveMotDePasse'];
}

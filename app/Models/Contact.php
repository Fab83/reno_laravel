<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'statut',
        'adresse_proprietaire',
        'commune_proprietaire',
        'email',
        'telephone',
        'acces_numerique',
        'tierce_personne',
        'tierce_personne_nom',
        'tierce_personne_prenom',
    ];
}

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
        'rfr',
        'annee_rfr',
        'nb_adultes',
        'nb_enfants',
        'locataire_annee_entree',
        'locataire_loyer',
        'projet',
        'financement',
    ];

    public function logements()
    {
        return $this->hasMany(Logement::class);
    }
}

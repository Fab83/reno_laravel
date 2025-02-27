<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    protected $fillable = [
        'adresse_logement',
        'commune_logement',
        'ville',
        'logement_vacant',
        'contact_id',
        'aide_percue',
        'type',
        'annee_construction',
        'surface',
        'nombre_pieces',
        'mitoyennete',
        'type_energie',
        'chauffage_principal',
        'type_chaudiere',
        'chauffage_appoint',
        'production_ecs',
        'cave',
        'combles',
        'combles_isoles',
        'murs_isoles',
        'ventilation',
        'humidite_moisissure',
        'menuiseries',
        'volets',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('statut');
            $table->string('adresse_proprietaire')->nullable();
            $table->string('commune_proprietaire')->nullable();
            $table->string('email');
            $table->string('telephone');
            $table->string('acces_numerique');
            $table->boolean('tierce_personne');
            $table->string('tierce_personne_nom')->nullable();
            $table->string('tierce_personne_prenom')->nullable();
            $table->string('rfr')->nullable();
            $table->string('annee_rfr')->nullable();
            $table->integer('nb_adultes')->nullable();
            $table->integer('nb_enfants')->nullable();
            $table->string('locataire_annee_entree')->nullable();
            $table->string('locataire_loyer')->nullable();
            $table->longText('projet');
            $table->longText('financement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

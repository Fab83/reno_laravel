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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('adresse_logement');
            $table->string('commune_logement');
            $table->string('ville');
            $table->string('logement_vacant');
            $table->unsignedBigInteger('contact_id');
            $table->string('aide_percue');
            $table->string('type');
            $table->string('annee_construction');
            $table->string('surface')->default('0');
            $table->string('nombre_pieces')->default('0');
            $table->string('mitoyennete');
            $table->string('type_energie');
            $table->string('chauffage_principal');
            $table->string('type_chaudiere');
            $table->string('chauffage_appoint');
            $table->string('production_ecs');
            $table->string('cave');
            $table->string('combles');
            $table->string('combles_isoles');
            $table->string('murs_isoles');
            $table->string('ventilation');
            $table->string('humidite_moisissure');
            $table->string('menuiseries');
            $table->string('volets');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};

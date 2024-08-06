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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('birthdate');
            $table->string('sexe');
            $table->string('profil_photo_path');
            $table->string('phone_number');
            $table->string('email');
            $table->string('adresse_cabinet');
            $table->string('website');
            $table->string('speciality');
            $table->string('licence_number');
            $table->string('hospital_affilier');
            $table->string('tarif_consulation');
            $table->string('tele_consultation');
            $table->string('paiement_mode');
            $table->string('langues');
            $table->string('assurance_acceptees');
            $table->string('option_de_teleconsultation');
            $table->string('politique_reservation_annulation');
            $table->string('diplome_certifications');
            $table->string('experiences_professionels');
            $table->string('memberships_associations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

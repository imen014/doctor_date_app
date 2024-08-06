<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'birthdate',
        'sexe',
        'profil_photo_path',
        'phone_number',
        'email',
        'adresse_cabinet',
        'website',
        'speciality',
        'licence_number',
        'hospital_affilier',
        'tarif_consulation',
        'tele_consultation',
        'paiement_mode',
        'langues',
        'assurance_acceptees',
        'option_de_teleconsultation',
        'politique_reservation_annulation',
        'diplome_certifications',
        'experiences_professionels',
        'memberships_associations'


    ];

    
}

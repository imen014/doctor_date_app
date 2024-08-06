<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\File;
use App\Models\Certifications;
use App\Models\Professional_experience;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Association;





class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function doctor_general_information(int $user_id)
    {
        $user = User::findOrFail($user_id);
        return view('doctors.inscription',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save_doctor_general_information(Request $request)
    {

        $validated_data = $request->validate([
            'birthdate' => 'required|date',
            'sexe' => 'required|string|max:255',
            'profil_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required|string|max:255',
            'adresse_cabinet' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'user_id' => 'integer'

        ]);
        $doctor = new Doctor();
        $user_id = $validated_data['user_id'];
        $user = User::findOrFail($user_id);
        if ($request->hasFile('profil_photo_path')) {
            $file = $request->file('profil_photo_path');
            $filename = $request->input('fullname') . time() . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/doctors');
    
            // Vérifier si le répertoire parent existe et le créer si nécessaire
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }
    
            $file->move($destinationPath, $filename);
            $validated_data['profil_photo_path'] = 'uploads/doctors/' . $filename;
        }
        $doctor->fill($validated_data);
        $doctor->fullname = $user->name;
        $doctor->email = $user->email;
        $doctor->user_id = $user_id;
        $doctor->save();
        $user->doctor_id = $doctor->id;
        $user->save();
        return redirect()->route('work_information', ['id' => $doctor->id]);

          
      }

    /**
     * Display the specified resource.
     */
    public function work_information(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.work')->with('doctor',$doctor);
    }

    public function save_work_information(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'speciality' => 'required|string|max:255',
            'licence_number' => 'required|numeric',
            'hospital_affilier' => 'required|string|max:255',
            'tarif_consulation' => 'required|numeric',
          //  'tele_consultation' => 'boolean'        

        ]);
        $doctor = Doctor::findOrFail($id);
         // Mettre à jour les autres champs validés
         $doctor->speciality =  $validated_data['speciality'];
         $doctor->licence_number =  $validated_data['licence_number'];
         $doctor->hospital_affilier =  $validated_data['hospital_affilier'];
         $doctor->tarif_consulation =  $validated_data['tarif_consulation'];
        $doctor->tele_consultation = $request->has('tele_consultation') ? 1 : 0;

         $doctor->save();

  
         return redirect()->route('general_policy', ['id' => $doctor->id]);
         
        
    }

    public function general_policy(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.general_policy')->with('doctor',$doctor);
    }

    public function save_general_policy(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'paiement_mode' => 'string|max:255',
            'langue' => 'string|max:255',
            'assurance_acceptees' => 'string|max:255',
            'option_de_teleconsultation' => 'string|max:255',
            'politique_reservation_annulation' => 'string|max:255'        

        ]);
        $doctor = Doctor::findOrFail($id);
         // Mettre à jour les autres champs validés
         $doctor->paiement_mode =  $validated_data['paiement_mode'];
         $doctor->langues =  $validated_data['langue'];
         $doctor->assurance_acceptees =  $validated_data['assurance_acceptees'];
         $doctor->option_de_teleconsultation =  $validated_data['option_de_teleconsultation'];
        $doctor->politique_reservation_annulation =$validated_data['politique_reservation_annulation'];

         $doctor->save();

  
         return redirect()->route('professional_experience', ['id' => $doctor->id]);
         
        
    }

    public function professional_experience(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        $certifications = $certifications = Certifications::all();
        $experiences = Professional_experience::all();
        $associations = Association::all();
        return view('doctors.professional_experience',['doctor'=>$doctor,'certifications'=>$certifications,'experiences'=>$experiences,'associations'=>$associations]);
    }

    public function save_professional_experience(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'diplome_certifications' => 'integer|max:255',
            'experiences_professionels' => 'integer|max:255',
            'memberships_associations' => 'integer|max:255'
         ]);
        $doctor = Doctor::findOrFail($id);
        $doctor->diplome_certifications = $validated_data['diplome_certifications'];
        $doctor->experiences_professionels = $validated_data['experiences_professionels'];
        $doctor->memberships_associations = $validated_data['memberships_associations'];
        $doctor->save();

  
        // return view('doctors.doctor_added',['doctor'=>$doctor]);
        Auth::login($user);
        return redirect(route('dashboard', absolute: false));
        
         
        
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function show_profil(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.show_profil')->with('doctor',$doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class SearchDoctors extends Controller
{
    public function search_doctors_by__speciality()
    {
        return view('doctors_selection.search_doctors_by__speciality');
    } 

    public function find_doctors_by__speciality(Request $request)
    {
        $validated_data =$request->validate([
            'speciality_doctor' => 'string|max:255'

        ]);
        $speciality = $validated_data['speciality_doctor'];
       $doctors = Doctor::all()
       ->where('speciality',$speciality);
        return view('doctors_selection.search_by_speciality',['doctors'=>$doctors,'speciality'=>$speciality]);
    } 

    public function search_doctors_by__fullname()
    {
        return view('doctors_selection.search_doctors_by__fullname');
    } 

    public function find_doctors_by__fullname(Request $request)
    {
        $validated_data =$request->validate([
            'fullname' => 'string|max:255'

        ]);
        $fullname = $validated_data['fullname'];
        $doctors = Doctor::all()
       ->where('fullname',$fullname);
        return view('doctors_selection.find_doctors_by__fullname',['doctors'=>$doctors,'fullname'=>$fullname]);
    } 

    public function search_doctors_by__sexe()
    {
        return view('doctors_selection.search_doctors_by__sexe');
    } 

    public function find_doctors_by__sexe(Request $request)
    {
        $validated_data =$request->validate([
            'sexe' => 'string|max:255'

        ]);
        $sexe = $validated_data['sexe'];
        $doctors = Doctor::all()
       ->where('sexe',$sexe);
        return view('doctors_selection.find_doctors_by__sexe',['doctors'=>$doctors,'sexe'=>$sexe]);
    } 

    public function search_doctors_by__cabinet_address()
    {
        return view('doctors_selection.search_doctors_by__cabinet_address');
    } 

    public function find_doctors_by__cabinet_address(Request $request)
    {
        $validated_data =$request->validate([
            'adresse_cabinet' => 'string|max:255'

        ]);
        $adresse_cabinet = $validated_data['adresse_cabinet'];
        $doctors = Doctor::all()
       ->where('adresse_cabinet',$adresse_cabinet);
        return view('doctors_selection.find_doctors_by__adresse_cabinet',['doctors'=>$doctors,'adresse_cabinet'=>$adresse_cabinet]);
    } 

    public function search_doctors_by__affiliated_hospital_or_tarif_consulation_or_tele_consultation()
    {
        return view('doctors_selection.3_criteres');
    } 

    public function find_doctors_by__3_criteres(Request $request)
    {
        // Validate input
        $validated_data = $request->validate([
            'hospital_affilier' => 'nullable|string|max:255',
            'tarif_consulation' => 'nullable|numeric',
            'tele_consultation' => 'nullable|boolean',
        ]);
    
        // Retrieve the validated data
        $hospital_affilier = $validated_data['hospital_affilier'] ?? null;
        $tarif_consulation = $validated_data['tarif_consulation'] ?? null;
        $tele_consultation = $validated_data['tele_consultation'] ?? null;
    
        // Build the query
        $query = Doctor::query();
    
        if ($hospital_affilier) {
            $query->where('hospital_affilier', $hospital_affilier);
        }
    
        if ($tarif_consulation !== null) {
            $query->where('tarif_consulation', $tarif_consulation);
        }
    
        if ($tele_consultation !== null) {
            $query->where('tele_consultation', $tele_consultation);
        }
    
        // Execute the query
        $doctors = $query->get();
    
        // Return the view with results
        return view('doctors_selection.find_doctors_by__3_criteres', [
            'doctors' => $doctors,
            'hospital_affilier' => $hospital_affilier,
            'tarif_consulation' => $tarif_consulation,
            'tele_consultation' => $tele_consultation,
        ]);
    }
    
  
    
    public function search_doctors()
    {
        return view('doctors_selection.search');
    } 



}


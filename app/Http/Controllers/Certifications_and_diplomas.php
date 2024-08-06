<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certifications;
use App\Models\Doctor;
use App\Models\Relation_certif_doctor;


class Certifications_and_diplomas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('certifications.create')->with('doctor',$doctor);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'title' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'date_awarded' => 'required|date',
            'description' => 'required|string|max:255',
        ]);
    
        // Check if the certification already exists
        $existingCertification = Certifications::where('title', $validated_data['title'])
            ->where('institution', $validated_data['institution'])
            ->where('description', $validated_data['description'])
            ->first();
    
        if ($existingCertification) {
            $message = 'This certification already exists.';
            // If the certification exists, return an error message
            return view('doctors.professional_experience')->with(['message' => $message,'id'=>$id]);
        } else {
            // If the certification does not exist, create a new one
            $certification = new Certifications();
            $relation = new Relation_certif_doctor();
            
            $certification->fill($validated_data);
            $certification->doctor_id = $id;
            $certification->save();
            
            $relation->certif_id = $certification->id;
            $relation->doctor_id = $id;
            $relation->save(); 
            $doctor = Doctor::findOrFail($id);
            return redirect()->route('professional_experience', ['id' => $id, 'doctor',$doctor]);
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

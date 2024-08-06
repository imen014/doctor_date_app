<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Professional_experience;


class Professiona_experience extends Controller
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
    public function create(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('professional_experiences.create')->with('doctor',$doctor);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id)
    {
        $validated_data = $request->validate([
            'begin_date' => 'date',
            'end_date' => 'date',
            'organization' => 'string|max:255',
            'task1' => 'string|max:255',
            'task2' => 'string|max:255',
            'task3' => 'string|max:255',
            'description' => 'string|max:255'

        ]);
        $doctor = Doctor::findOrFail($id);
        $professional_experience = new Professional_experience();
        $professional_experience->fill($validated_data);
        $professional_experience->doctor_id = $doctor->id;
        $professional_experience->save();

        return redirect()->route('professional_experience', ['id' => $doctor->id]);


        
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

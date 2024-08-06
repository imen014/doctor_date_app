<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Association;


class AssociationController extends Controller
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
        return view('associations.create')->with('doctor',$doctor);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id)
    {
        $validated_data = $request->validate([
            'association_name' => 'string|max:255',
            'doctor_functionnality' => 'string|max:255'

        ]);
        $association = new Association();
        $association->fill($validated_data);
        $association->doctor_id = $id;
        $association->save();

        return redirect()->route('professional_experience', ['id' => $id]);

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

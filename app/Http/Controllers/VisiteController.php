<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Visite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;




class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $visites = Visite::where('doctor_id', $user->id)
        ->orwhere('patient_id',$user->id)
        ->orWhere('user_id',$user->id)
        ->get();

        return view('visites.index')->with('visites',$visites);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('visites.create',['doctor'=>$doctor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'visite_state' => 'string|max:255',
            'asked_date' => 'date',
            'doctor_id' => 'numeric'
        ]);

        $user = Auth::user();

        if ($user->role == 'patient') {
            // Find the patient by user_id
            $patient = Patient::where('user_id', $user->id)->first();
            $patient_id = $patient->id;

            $visite = new Visite();
            $visite->fill($validated_data);
            $visite->doctor_id = $validated_data['doctor_id'];
            $visite->patient_id = $patient_id;
            $visite->user_id = $user->id;
            $visite->save();

           // return redirect()->back();
           return redirect()->route('get_my_dates')->with('success', 'ur asks present.');
           
            
        } else {
            return redirect()->route('login')->with('error', 'Please log in to continue.');
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
        $visite = Visite::findOrFail($id);
        return view('visites.edit',compact('visite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'visite_state' => 'string|max:255',
            'asked_date' => 'date',
            'doctor_id' => 'numeric'
        ]);

        $user = Auth::user();

        if ($user->role == 'patient') {
            // Find the patient by user_id
            $patient = Patient::where('user_id', $user->id)->first();
            $patient_id = $patient->id;

            $visite = Visite::findOrFail($id);
            $visite->fill($validated_data);
            $visite->doctor_id = $validated_data['doctor_id'];
            $visite->patient_id = $patient_id;
            $visite->user_id = $user->id;
            $visite->update();

           // return redirect()->back();
           return view('visites.updated_succefully')->with('visite', $visite);
           
            
        } else {
            return redirect()->route('login')->with('error', 'Please log in to continue.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visite = Visite::findOrFail($id);
        $visite->delete();
        return view('visites.deleted_succefully');
    }
}
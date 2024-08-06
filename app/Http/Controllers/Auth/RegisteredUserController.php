<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Patient;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->role = $request->input('role');
       

        event(new Registered($user));

        if($user->role == 'doctor'){
            return redirect()->route('doctor_subscribe',['user_id'=>$user->id]);
        }
        if($user->role == 'patient'){
            $patient = new Patient();
            $patient->user_id = $user->id;
            $patient->patient_name = $user->name;
            $patient->email = $user->email;
            $patient->save();
            $user->patient_id = $patient->id;
            $user->save();
        }
       
        $user->save();
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

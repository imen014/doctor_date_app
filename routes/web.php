<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Certifications_and_diplomas;
use App\Http\Controllers\Professiona_experience;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\SearchDoctors;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VisiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/doctor/inscription/{user_id}', [DoctorController::class , 'doctor_general_information'])->name('doctor_subscribe');
Route::post('/doctor/inscription', [DoctorController::class , 'save_doctor_general_information'])->name('save_doctor_general_information');
Route::get('/doctor/{id}/work_information', [DoctorController::class , 'work_information'])->name('work_information');
Route::post('/doctor/{id}/work_information', [DoctorController::class , 'save_work_information'])->name('save_work_information');
Route::get('/doctor/{id}/general_policy', [DoctorController::class , 'general_policy'])->name('general_policy');
Route::post('/doctor/{id}/general_policy', [DoctorController::class , 'save_general_policy'])->name('save_general_policy');
Route::get('/doctor/{id}/professional_experience', [DoctorController::class , 'professional_experience'])->name('professional_experience');
Route::post('/doctor/{id}/professional_experience', [DoctorController::class , 'save_professional_experience'])->name('save_professional_experience');
Route::get('/doctor/{id}/Certifications_and_diplomas/add', [Certifications_and_diplomas::class , 'create'])->name('Certifications_and_diplomas_add');
Route::post('/doctor/{id}/Certifications_and_diplomas/add', [Certifications_and_diplomas::class , 'store'])->name('save_Certifications_and_diplomas');
Route::get('/doctor/{id}/Professional_experience/add', [Professiona_experience::class , 'create'])->name('add_professional_experience');
Route::post('/doctor/{id}/Professional_experience/add', [Professiona_experience::class , 'store'])->name('save_professional_experience');
Route::get('/doctor/{id}/Association/add', [AssociationController::class , 'create'])->name('add_association');
Route::post('/doctor/{id}/Association/add', [AssociationController::class , 'store'])->name('save_association');
Route::get('/doctors/by/speciality', [SearchDoctors::class , 'search_doctors_by__speciality'])->name('search_doctors_by__speciality');
Route::post('/doctors/by/speciality', [SearchDoctors::class , 'find_doctors_by__speciality'])->name('find_doctors_by__speciality');
Route::get('/doctors/by/fullname', [SearchDoctors::class , 'search_doctors_by__fullname'])->name('search_doctors_by__fullname');
Route::post('/doctors/by/fullname', [SearchDoctors::class , 'find_doctors_by__fullname'])->name('find_doctors_by__fullname');
Route::get('/doctors/by/sexe', [SearchDoctors::class , 'search_doctors_by__sexe'])->name('search_doctors_by__sexe');
Route::post('/doctors/by/sexe', [SearchDoctors::class , 'find_doctors_by__sexe'])->name('find_doctors_by__sexe');
Route::get('/doctors/by/cabinet_address', [SearchDoctors::class , 'search_doctors_by__cabinet_address'])->name('search_doctors_by__cabinet_address');
Route::post('/doctors/by/cabinet_address', [SearchDoctors::class , 'find_doctors_by__cabinet_address'])->name('find_doctors_by__cabinet_address');
Route::get('/doctors/by/hospital/fees/telecons', [SearchDoctors::class , 'search_doctors_by__affiliated_hospital_or_tarif_consulation_or_tele_consultation'])->name('search_doctors_by__3_criteres');
Route::post('/doctors/by/hospital/fees/telecons', [SearchDoctors::class , 'find_doctors_by__3_criteres'])->name('find_doctors_by__3_criteres');
Route::get('/doctors/search', [SearchDoctors::class , 'search_doctors'])->name('search_doctors');
Route::get('/doctor/{id}/show_profil', [DoctorController::class , 'show_profil'])->name('show_profil');
Route::get('/doctor/{id}/ask_visite', [VisiteController::class , 'create'])->name('ask_visite');
Route::post('/doctor/ask_visite', [VisiteController::class , 'store'])->name('save_visite');
Route::get('asks/show_dates', [VisiteController::class , 'index'])->middleware('auth')->name('get_my_dates');
Route::get('/visite/{id}/edit', [VisiteController::class , 'edit'])->name('edit_ask_visite');
Route::put('/visite/{id}/edit', [VisiteController::class , 'update'])->name('update_ask_visite');
Route::get('/visite/{id}/delete', [VisiteController::class , 'destroy'])->name('delete_ask_visite');


require __DIR__.'/auth.php';

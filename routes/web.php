<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\Frontend\authController;
use App\Http\Controllers\Frontend\doctorController;
use App\Http\Controllers\Frontend\homeController;
use App\Http\Controllers\Frontend\shaheedController;
use App\Http\Controllers\mimController;
use App\Http\Controllers\mimiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;


Route::get('/', [homeController::class, 'index'])->name('welcome');
Route::get('/login', [authController::class, 'index'])->name('login');
Route::get('/dashboard', [homeController::class, 'dashboard'])->name('dashboard');
Route::get('/welcome', [homeController::class, 'welcome'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [dashboardController::class, 'doctor'])->name('dashboard');

Route::get('/patients', [PatientController::class, 'index'])->name('patientlist');
Route::get('/new-patient-reg', [PatientController::class, 'create'])->name('new_reg');
Route::post('/patient-store', [PatientController::class, 'store'])->name('patient_store');
Route::get('/patient-search', [PatientController::class, 'search'])->name('patient.search'); 


Route::get('/appointment', [AppointmentController::class, 'index'])->name('doctor_appointment');  
Route::get('/new-appointment', [AppointmentController::class, 'create'])->name('create_appointment');
Route::get('/new-appointment-1', [AppointmentController::class, 'patientlistview'])->name('create_appointment'); 
Route::get('/patient-search', [AppointmentController::class, 'search'])->name('patient.search'); 
// Route::get('/new-appointment', [AppointmentController::class, 'doctorselect'])->name('doctor_select'); 




Route::get('/doctor', [doctorController::class, 'index'])->name('doctorlist');
Route::get('/create_doctor', [doctorController::class, 'create'])->name('create_doctor');
Route::post('/doctor_store', [doctorController::class, 'store'])->name('doctor_store');

Route::get('/patient-registration-card', [PatientController::class, 'generateCard']); 

// Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');

Route::get('/shaheed', [shaheedController::class, 'shaheed'])-> name('shaheed');
Route::get('/mim', [mimController::class, 'mim'])-> name('mim');
Route::get('/mimi', [mimiController::class, 'mimi'])->name('mimi');


























Route::get('data', [dataController::class, 'data']);






















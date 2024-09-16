<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
    $patientCount =patient::count(); 
    $doctorCount =doctor::count();
    // $ipdPatientCount=ipdPatient::();
    return view('dashboard', compact('patientCount', 'doctorCount')); 
    }

    // public function doctor()
    // {
    //     $doctorCount =doctor::count();
    //     return view('dashboard', compact('doctorCount'));
    // }
    
}

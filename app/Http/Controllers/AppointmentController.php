<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment');
    }

    public function create()
    {
        return view('create_appointment');
    }

    public function patientlistview()
    {
        $patients =patient::all();
        $doctors =doctor::all(); 
        // dd ($doctors);
        return view('create_appointment', compact('patients', ));
    }
    public function search(Request  $request)
    {
        $query =$request->input('query'); 
        $patients =Patient::where('p_reg', 'LIKE', '%'.$query.'%')
                        ->orWhere('pname', 'LIKE', '%'.$query.'%')
                        // ->orWhere('mobilenumber', 'LIKE', '%'.$query.'%')
                        // ->paginate(10);
                        ->get();
        $doctors =doctor::all(); 
        return view('create_appointment', compact('patients','doctors'));
    }
    
}

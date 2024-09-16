<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index()
    {
        $patients = patient::paginate(10);
        return view('patients.patientlist', compact('patients'));
    }

    public function create()
    {
        return view('new_reg');
    }

    public function store(Request $request, PDF $pdf)
    // PDF $pdf  [dependency injection]
    {
        $request->validate([
            'p_reg'         => 'required|string|max:255',
            'pname'         => 'required|string|max:255',
            'nid'           => 'required|string|max:255|unique:patients',
            'mobilenumber'  => 'required|string|max:11',
            'dob'           => 'required|string',
        ]);

        // $validation = Validator::make($request->all(), [
        //     'p_reg'         => 'required|string|max:255',
        //     'pname'         => 'required|string|max:255',
        //     'nid'           => 'required|string|max:255|unique:patients',
        //     'mobilenumber'  => 'required|string|max:15',
        //     'dob'           => 'required|string',
        // ]);

        // if($validation->fails()){
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

        $patients = Patient::create([
            'p_reg'         => $request->p_reg,
            'pname'         => $request->pname,
            'nid'           => $request->nid,
            'mobilenumber'  => $request->mobilenumber,
            'dob'           => date('Y-m-d', strtotime($request->dob)),
        ]);

        $pdf->loadView('patient_card', compact('patients'));
        return $pdf->stream();
        // return redirect()->route('patientlist');
    }
        
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $patients = Patient::where('p_reg', 'LIKE', '%'.$query.'%')
                         ->orWhere('pname', 'LIKE', '%'.$query.'%')
                         ->paginate(10);                 
        return view('patients.patientlist',compact('patients'));

    }

    public function generateCard(PDF $pdf)
    {
        $patients = [
            'p_reg' => '01234',
            'pname' => 'Shaheed',
            'nid' => '754375834',
            'mobilenumber'  => '01571741308',
            'dob'           => '01/01/1991',
        ];
        // Load the view and pass the patient data
        $pdf->loadView('patient_card', compact('patients'));
        // for view
        return $pdf->stream();

        // for downdoad
        // return $pdf->download('patient_registration_card.pdf');
    }
}

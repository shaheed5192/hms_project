<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = doctor::paginate(2);
        return view('doctor.doctorlist', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'dname'          => 'required|max:255',
            'designation'    => 'required|max:255',
            'mobilenumber'   => 'required|max:15',
            'email'          => 'required'
        ]);

        doctor::create([
            'dname'         => $request->dname,
            'designation'   => $request->designation,
            'mobilenumber'  => $request->mobilenumber,
            'email'         => $request->email
        ]);
        return redirect()->route('doctorlist');
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

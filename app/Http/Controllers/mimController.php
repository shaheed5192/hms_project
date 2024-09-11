<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class mimController extends Controller
{
    public function mim() 
    {
        $users = User::paginate(10);
        // dd($users);
        return view('mim', compact('users'));
    }
}

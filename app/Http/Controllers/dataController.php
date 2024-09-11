<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dataController extends Controller
{
    // public function data() 
    // {
    //     $users=User:: Paginate(10);
    //     return view('data', compact('users'));  
    // }

    public function data(){
        $users=User::Paginate(10);
        return view('data', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class mimiController extends Controller
{
    public function mimi()
    {
        $users=User:: paginate(10);
        return view('mimi', compact('users'));
    }
}

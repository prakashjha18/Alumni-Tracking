<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function dashboard()
    {
        return view('alumni.dashboard');
    }
}

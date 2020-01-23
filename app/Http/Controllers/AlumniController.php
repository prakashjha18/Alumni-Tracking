<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function dashboard()
    {
        return view('alumni.dashboard');
    }
    public function dashboard2()
    {
        return view('alumni.dashboard2');
    }
    public function funding()
    {
        return view('alumni.funding');
    }
}

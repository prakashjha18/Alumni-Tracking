<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorateController extends Controller
{
    public function dashboard()
    {
        return view('directorate.dashboard');
    }
    public function addcollege()
    {
        return view('directorate.addcollege');
    }
}

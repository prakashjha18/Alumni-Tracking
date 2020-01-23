<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function dashboard()
    {
        return view('college.dashboard');
    }
    public function findalumni(){
        return view('college.findalumni');
    }
}

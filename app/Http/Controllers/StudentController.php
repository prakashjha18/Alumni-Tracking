<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\internships;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }
    public function jobdesc($id){
        $internship = internships::find($id);
        return view('jobdescription')->with('internship',$internship);
    }
}

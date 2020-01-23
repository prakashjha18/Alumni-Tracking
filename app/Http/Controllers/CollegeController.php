<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\college;

class CollegeController extends Controller
{
    public function dashboard()
    {
        return view('college.dashboard');
    }
    public function findalumni(){
        return view('college.findalumni');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'clgname' => 'required', 
            'clgshort' => 'required', 
            'email' => 'required',
            'newpass' => 'required'
        ]);
        $college = new college;
        $college->clgname = $request->clgname;
        $college->clgshort = $request->clgshort;
        $college->email = $request->email;
        $college->newpass = $request->newpass;
        $college->save();
        
        return 'Successful';
        }
    public function posts()
    {
        return view('college.posts');
    }
}

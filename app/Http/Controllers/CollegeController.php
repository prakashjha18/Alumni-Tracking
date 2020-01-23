<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\college;
use App\User;

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
         User::create([
            'name' => $request->clgname,
            'email' => $request->email,
            'password' => $request->newpass,
            'type' => 'college',
            'clgname' => $request->clgname,
            'yearpass' => '',
            'currentstatus' =>'',
            'orgname' => $request->clgshort,
        ]);
        return redirect()->back();
        }
    public function posts()
    {
        return view('college.posts');
    }

}

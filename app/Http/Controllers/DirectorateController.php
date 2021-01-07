<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
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
    public function viewcolleges()
    {
        $colleges = User::where('type','college')->get();
        for ($x = 0; $x < sizeof($colleges); $x++) {
            $colleges[$x]->orgname=strtolower($colleges[$x]->orgname);
        }
        $colleges = User::where('type','college')->get();
        return view('directorate.viewcollege')->with('colleges',$colleges);
    }
    public function publishnotice()
    {
        return view('directorate.publishnotice');
    }
    public function location()
    {
        return view('directorate.location');
    }
    public function collegerevs(){
        $colleges = User::where('type','college')->get();
        for ($x = 0; $x < sizeof($colleges); $x++) {
            $colleges[$x]->orgname=strtolower($colleges[$x]->orgname);
        }
        return view('directorate.collegereviews')->with('colleges',$colleges);
    }
}


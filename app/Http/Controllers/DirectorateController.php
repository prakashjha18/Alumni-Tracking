<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class DirectorateController extends Controller
{
    public function dashboard()
    {
        $users = User::where('type','alumni')->get();
        return view('directorate.dashboard')->with('users', $users);
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
        return view('directorate.viewcollege')->with('colleges',$colleges);
    }
    public function publishnotice()
    {
        return view('directorate.publishnotice');
    }
    public function location()
    {
        return view('directorate.Location');
    }

    public function viewalumnibyclgname($name){
        $users = User::where('type','alumni')->where('clgname',$name)->get();
        return view('directorate.dashboard')->with('users', $users);
    }

}


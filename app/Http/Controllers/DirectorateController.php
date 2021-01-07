<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\events;
use App\reviews;
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

        $colleges = User::where('type','college')->get();
        for ($x = 0; $x < sizeof($colleges); $x++) {
            $colleges[$x]->orgname=strtolower($colleges[$x]->orgname);
        }
        // return $colleges;
        $i=0;
        return view('directorate.location')->with('colleges',$colleges)->with('i',$i);
    }
    public function viewalumnibyclgname($name){
        $users = User::where('type','alumni')->where('clgname',$name)->get();
        return view('directorate.dashboard')->with('users', $users);
    }
    public function collegerevs(){
        $colleges = User::where('type','college')->get();
        for ($x = 0; $x < sizeof($colleges); $x++) {
            $colleges[$x]->orgname=strtolower($colleges[$x]->orgname);
        }
        return view('directorate.collegereviews')->with('colleges',$colleges);
    }
    public function directoratevent() {
        $events = events::all();
        return view('directorate.directoratevent')->with('events',$events);
    }
    public function directoratesinglevent($id) {
        $events = events::find($id);
        return view('directorate.directoratesinglevent')->with('events',$events);
    }
    public function directoratesingleclgreviews($name) {
        $reviews = reviews::where('clgname',$name)->get();
        $pos = reviews::where('clgname',$name)->where('analysis','pos')->get()->count();
        $neg = reviews::where('clgname',$name)->where('analysis','neg')->get()->count();
        return view('directorate.directoratesingleclgreviews')->with('reviews', $reviews)->with('pos',$pos)->with('neg',$neg);
    }
}


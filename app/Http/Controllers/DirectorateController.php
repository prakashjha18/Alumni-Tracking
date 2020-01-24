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
        return view('directorate.viewcollege')->with('colleges',$colleges);
    }
}

<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Session;
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
    public function newsletter()
    {
        return view('alumni.newsletter');
    }
    public function internship()
    {
        return view('alumni.internship');
    }
    public function editprofile()
    {
        $user = Auth::user();
        return view('alumni.editprofile')->with('user', $user);
    }
    public function conventions()
    {
        return view('alumni.conventions');
    }
    public function verify($id)
    {
        $user = User::find($id);
        $user->verifiedbyclg =1;
        $user->save();
        Session::flash('success', 'ALUMNI SUCCESSFULLLY VERIFIED');
        return redirect()->route('college.verification');
    }
}

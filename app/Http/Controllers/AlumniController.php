<?php

namespace App\Http\Controllers;
use App\User;
use App\reviews;
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
        $user->verifiedbyclg = 1;
        $user->save();
        Session::flash('success', 'ALUMNI SUCCESSFULLLY VERIFIED');
        return redirect()->route('college.verification');
    }
    public function addreview(){
        return view('alumni.addreview');
    }

    public function submitreview(Request $request){
        $user = Auth::user();
        if($user->review_count >=2){
            Session::flash('success', 'you cannot add more than 2 reviews!!');

            return redirect()->route('alumni.addreview');
        }else{
        $review = new reviews;
        $review->clgname = $user->clgname;
        $review->review = $request->reviews;
        $user->review_count=$user->review_count + 1;
        $user->save();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://127.0.0.1:8005/sentanalysis', [
        'form_params' => [
        'review' => $review->review,
    ]
    ]);
        $review->analysis = $response->getBody()->getContents();
        $review->save();

        Session::flash('success', 'successfully added a review');

        return redirect()->route('alumni.addreview');
        }

    }
    public function friendslist() {
        return view('alumni.userslist');
    }

    public function alumnitable(){
        $clgname = Auth::user()->clgname;
        $yearpass = Auth::user()->yearpass;
        $currentstatus = Auth::user()->currentstatus; 
        // $users = User::where('type','alumni')->where('currentstatus',$currentstatus)->get();
        $users = User::where('type','alumni')->where('id', '!=', auth()->id())->get();
        return view('alumni.alumnitable')->with('users', $users);
    }

    public function viewalumni(Request $request){
        $clgname = Auth::user()->clgname;
        $yearpass = Auth::user()->yearpass;
        $currentstatus = Auth::user()->currentstatus; 
        if($request->viewby=='College Name'){
        $users = User::where('type','alumni')->where('clgname',$clgname)->where('id', '!=', auth()->id())->get();
        }
        if($request->viewby=='Passing Year'){
            $users = User::where('type','alumni')->where('yearpass',$yearpass)->where('id', '!=', auth()->id())->get();
        }
        if($request->viewby=='Current Status'){
            $users = User::where('type','alumni')->where('currentstatus',$currentstatus)->where('id', '!=', auth()->id())->get();
        }
        // $users = User::where('type','alumni')->get();
        return view('alumni.alumnitable')->with('users', $users);
    }
}

// $users = User::where('id', '!=', auth()->id())->get();
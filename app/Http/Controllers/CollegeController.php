<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\college;
use App\User;
use App\events;
use App\reviews;
use Illuminate\Support\Facades\Mail;
use App\Mail\collegepasswd;
use Auth;
use Session;
use Illuminate\Support\Facades\Http;

class CollegeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('college.dashboard')->with(['user' => $user]);
    }
    public function findalumni() {
        return view('college.findalumni');
    }

    public function insert(Request $request) {
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
            'password' => Hash::make($request->newpass),
            'type' => 'college',
            'clgname' => $request->clgname,
            'yearpass' => '',
            'currentstatus' =>'',
            'orgname' => $request->clgshort,
        ]);
        $name = $college->clgname;
        $email = $college->email;
        $pass = $college->newpass;
        Mail::to($request->email)->send(new collegepasswd($name,$email,$pass));
        Session::flash('success', 'successfully added a college');

        return redirect()->route('addcollege');
        }
    public function posts()
    {
        return view('college.posts');
    }

    public function createposts(){
        return view('college.createpost');
    }
    public function verifications(){
        $clgshort = Auth::user()->orgname;
        $unverified = User::where('clgname',$clgshort)->where('verifiedbyclg',0)->get();
        $user = Auth::user();
        return view('college.verifications')->with('userm', $user)->with('unverified',$unverified);
    }
    public function verifiedalumnis() {
        $clgshort = Auth::user()->orgname;
        $verified = User::where('clgname',$clgshort)->where('verifiedbyclg',1)->get();
        $user = Auth::user();
        return view('college.verifiedalumni')->with('userm', $user)->with('verified',$verified);
    }

    public function analysis(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://127.0.0.1:8005/sentanalysis', [
            'form_params' => [
            'review' => 'excellent',]
        ]);
        return($response);
    }

    public function yrclgrevs(){
        $clgshort = Auth::user()->orgname;
        $reviews = reviews::where('clgname',$clgshort)->get();
        $pos = reviews::where('clgname',$clgshort)->where('analysis','pos')->get()->count();
        $neg = reviews::where('clgname',$clgshort)->where('analysis','neg')->get()->count();
        return view('college.analysis')->with('reviews', $reviews)->with('pos',$pos)->with('neg',$neg);
    }
    
    public function prediction(){
        return view('college.prediction');
    }
    public function myevents() {
        $events = events::where('user_id', Auth::user()->id)->get();
        return view('college.myevent')->with('events',$events);
    }
    public function mysinglevent($id) {
        $events = events::where('id', $id)->get()->first();
        if ($events->user_id != Auth::user()->id) {
            Session::flash('success', 'Error 404!!');
            return redirect()->back();
        }
        return view('college.mysinglevent')->with('events',$events);
    }
    public function createvent() {
        return view('college.createvent');
    }
    public function storevent(Request $request) { 
        //return $request;
        $this->validate($request, [
            'title' => 'required', 
            'date' => 'required', 
            'description' => 'required',
            'imagef' => 'image|nullable|max:1999',
        ]);
        $events = new events;
        if($request->hasFile('imagef')){
            // return $request;
            $avatar = $request->imagef;
            $avatar_new_name = time() .$avatar->getClientOriginalName();
            $avatar->move('uploads/events',$avatar_new_name);
            $events->image = 'uploads/events/' . $avatar_new_name;
        } else {
            $events->image = 'uploads/events/noimage.jpg';
        }
        
        $events->title = $request->title;
        $events->date = $request->date;
        $events->description = $request->description;
        //image field
        
        $events->mode = $request->mode;
        $events->college = Auth::user()->orgname;
        $events->user_id = Auth::user()->id;
        $events->save();
        Session::flash('success', 'Event successfully created, you can view in Your events');
        return redirect()->back();
        
    }
    public function editevent($id) {
        $event = events::find($id);
        return view('college.editevent')->with('event',$event);
    }
    public function updatevent(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required', 
            'date' => 'required', 
            'description' => 'required',
        ]);
        $events = events::find($id);
        
        $events->title = $request->title;
        $events->date = $request->date;
        $events->description = $request->description;
        
        $events->college = Auth::user()->clgname;
        $events->user_id = Auth::user()->id;
        $events->save();
        Session::flash('success', 'Event successfully updated');
        return redirect('/myevents');
    }

    public function deletevent($id) {
        $event = events::find($id);
        $event->delete();
        if(!$event == null) {
            Session::flash('success', 'Event successfully deleted');
        }
        return redirect('/myevents');
    } 
    
}
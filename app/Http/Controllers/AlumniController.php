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
        $user->verifiedbyclg =1;
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
        $response = $client->request('POST', 'http://127.0.0.1:8000/sentanalysis', [
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
}

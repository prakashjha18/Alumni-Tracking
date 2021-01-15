<?php

namespace App\Http\Controllers;
use App\User;
use App\internships;
use App\reviews;
use Auth;
use Session;
use App\events;
use App\friends;
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
    public function updateprofile(Request $request, $id) {
        $user = user::find($id);
        if($request->hasFile('image')){
            // return $request;
            $avatar = $request->image;
            $avatar_new_name = time() .$avatar->getClientOriginalName();
            $avatar->move('uploads/profile',$avatar_new_name);
            $user->image = 'uploads/profile/' . $avatar_new_name;
        } else {
            $user->image = 'uploads/profile/noimage.jpg';
        }
        $user->yearpass = $request->yearpass;
        $user->currentstatus = $request->currentstatus;
        $user->orgname = $request->orgname;
        $user->save();
        Session::flash('success', 'Profile successfully updated');
        return redirect()->back();
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
    public function userslist() {
        $users = Auth::user()::all();
        $user_id = Auth::user()->id;

        //below code should be there in a new function named viewprofile($name)
        // $user_id = Auth::user()->id;
        // $name = Auth::user()::select('name')->where('id',$user_id)->first();
        // $friend_id = Auth::user()::select('id')->where('name',$name)->first();
        // $friendCount = friends::where(['user_id' => $user_id, 'friend_id' => $friend_id])->count();
        // $friendDetails = friends::where(['user_id' => $user_id, 'friend_id' => $friend_id])->first();
        // $friendRequest = "Add Friend";
        // if ($friendCount>0) {
        //     if ($friendDetails->status == 0) {
        //         $friendRequest = "Add Friend";
        //     } else {
        //         $friendRequest = "Friend Request Sent";
        //     }
        // }
        // return $friendRequest;
        // return $friend_id;
        return view('alumni.userslist')->with('users', $users)->with('user_id', $user_id);
    }
    public function viewprofile($id) {
        $userCount = Auth::user()::where('id',$id)->count();
        $user = Auth::user()::where('id',$id)->get();
        if($userCount > 0) {
            $user_id = Auth::user()->id;
            $name = Auth::user()::select('name')->where('id',$id)->first();
            $friend_id = $id;
            $friendCount = friends::where(['user_id' => $user_id, 'friend_id' => $friend_id])->count();
            $friendDetails = friends::where(['user_id' => $user_id, 'friend_id' => $friend_id])->first();
            $friendRequest = "Add Friend";
            if ($friendCount>0) {
                if ($friendDetails->status == 1) {
                    $friendRequest = "UnFriend";
                } else {
                    $friendRequest = "Friend Request Sent";
                }
            } else {
                $friendRequestCount = friends::where(['friend_id' => $user_id, 'user_id' => $friend_id])->count();
                if ($friendRequestCount > 0) {
                    $friendRequest = "Confirm Friend Request";
                    $friendrequest = friends::where(['friend_id' => $user_id, 'user_id' => $friend_id])->first();
                    if($friendrequest->status == 1) {
                        $friendRequest = "UnFriend";
                    } else {
                        $friendRequest = "Confirm Friend Request";
                    }
                } else {
                     $friendRequest = "Add Friend";
                }
            }
            // return $user; 
            return view('alumni.viewprofile')->with('user',$user)->with('friendRequest', $friendRequest);
        } else {
            abort(404);
        }
    }
    public function addfriend($id) {
        $userCount = Auth::user()::where('id',$id)->count();
        if($userCount > 0) {
            $user_id = Auth::user()->id;
            $friend = new friends;
            $friend->user_id = $user_id;
            $friend->friend_id = $id;
            $friend->save(); 
            return redirect()->back(); 
        } else {
            abort(404);
        }
    }
    public function unfriend($id) {
        $userCount = Auth::user()::where('id',$id)->count();
        if($userCount > 0) {
            $user_id = Auth::user()->id;
            $friend_id = $id;
            friends::where(['user_id' => $user_id, 'friend_id' => $friend_id])->delete();
            friends::where(['user_id' => $friend_id, 'friend_id' => $user_id])->delete();
            return redirect()->back();
        } else {
            abort(404);
        }
    }
    public function friendrequests() {
        $user_id = Auth::user()->id;
        $friendRequests = friends::where(['friend_id'=>$user_id, 'status' => 0])->get();
        // return $friendRequests;
        return view('alumni.friendrequests')->with('friendRequests', $friendRequests);
    }
    public function acceptfriendrequest($id) {
        $receiver_id = Auth::user()->id;
        friends::where(['user_id' => $id, 'friend_id' => $receiver_id])->update(['status'=> 1]);
        return redirect()->back()->with('success', 'Friend Request Successfully Accepted!');
    }
    public function rejectfriendrequest($id) {
        $receiver_id = Auth::user()->id;
        friends::where(['user_id' => $id, 'friend_id' => $receiver_id])->delete();
        friends::where(['user_id' => $receiver_id, 'friend_id' => $id])->delete();
        return redirect()->back()->with('success', 'Friend Request Successfully Deleted!');
    }
    public function friends() {
        $user_id = Auth::user()->id;
        $friendCount = friends::where(['friend_id' => $user_id, 'status' => 1])->orwhere(function($query)
                                                                                {
                                                                                    $query->where(['user_id' => Auth::user()->id, 'status' => 1]);
                                                                                })->count();
        if ($friendCount > 0) {
            $friends = friends::where(['friend_id' => $user_id, 'status' => 1])->orwhere(function($query)
                                                                                {
                                                                                    $query->where(['user_id' => Auth::user()->id, 'status' => 1]);
                                                                                })->get();
        // return $friends; 
            return view('alumni.friends')->with('friends', $friends);
        }
    }
    public function confirmfriendrequest($id) {
        $user_id = Auth::user()->id;
        $friend_id = $id;
        $friendCount = friends::where(['friend_id' => $user_id, 'user_id' => $friend_id])->count();
        if ($friendCount > 0) {
            friends::where(['friend_id' => $user_id, 'user_id' => $friend_id])->update(['status' => 1]);
            return redirect()->back();
        } else {
            abort(404);
        }
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
    public function alumnievents() {
        $events = events::where('college', Auth::user()->clgname)->get();
        return view('alumni.alumnievents')->with('events',$events);
    }
    public function alumnisinglevent($id) {
        $events = events::find($id);
        if (strtolower(Auth::user()->clgname) != strtolower($events->college)) {
            Session::flash('success', 'Unauthorized User!');
            return redirect()->back();
        }
        return view('alumni.alumnisinglevent')->with('events',$events);
    }
    public function myinternships() {
        $internships = internships::where('user_id', Auth::user()->id)->get();
        return view('alumni.myinternships')->with('internships', $internships);
    }
    public function storeinternship (Request $request) {
        $this->validate($request, [
            'title' => 'required', 
            'company_name' => 'required',
            'company_headquater' => 'required',
            'address' => 'required',
            'imagef' => 'image|nullable|max:1999',
            'skills_req' => 'required',
            'job_desc' => 'required',
            'date' => 'required', 
        ]);
        $internships = new internships;
        $internships->title = $request->title;
        $internships->user_id = Auth::user()->id;
        if($request->hasFile('imagef')){
            // return $request;
            $avatar = $request->imagef;
            $avatar_new_name = time() .$avatar->getClientOriginalName();
            $avatar->move('uploads/internships',$avatar_new_name);
            $internships->image = 'uploads/internships/' .$avatar_new_name;
        } else {
            $internships->image = 'uploads/internships/noimage.jpg';
        }
        $internships->company_name = $request->company_name;
        $internships->company_headquater = $request->company_headquater;
        $internships->address = $request->address;
        $internships->skills_req = $request->skills_req;
        $internships->job_desc = $request->job_desc;
        $internships->date = $request->date;
        $internships->save();
        Session::flash('success', 'Internships successfully created, you can view in My Internships ');
        return redirect()->back();
    }   
    public function singleinternship($id) {
        $internship = internships::find($id);
        return view('alumni.singleinternship')->with('internship', $internship);
    }
    public function editinternship($id) {
        $internship = internships::find($id);
        return view('alumni.editinternship')->with('internship', $internship);
    }
    public function updateinternship (Request $request, $id) {
        $this->validate($request, [
            'title' => 'required', 
            'address' => 'required',
            'skills_req' => 'required',
            'job_desc' => 'required',
            'date' => 'required',
        ]);
        $internship = internships::find($id);
        
        $internship->title = $request->title;
        $internship->user_id = Auth::user()->id;
        $internship->address = $request->address;
        $internship->skills_req = $request->skills_req;
        $internship->job_desc = $request->job_desc;
        $internship->date = $request->date;
        $internship->save();
        Session::flash('success', 'Internship successfully updated');
        return redirect('/myinternships');
    }
    public function deleteinternship($id) {
        $internship = internships::find($id);
        $internship->delete();
        Session::flash('success', 'Event successfully deleted');
        return redirect('/myinternships');
    }
}

// $users = User::where('id', '!=', auth()->id())->get();

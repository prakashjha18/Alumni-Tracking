<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\internships;

Route::get('/', function () {
    $internship = internships::all();
    return view('dashboard')->with('internship', $internship);
});
// Route::get('/jobdescription/{id}/',function($id) {
//     //$internship = internships::find($id);
//     return view('jobdescription');
// });
Route::get('/jobdescription/{id}','StudentController@jobdesc')->name('home.job');
Route::get('/about',function(){
    return view('about');
});
Route::get('/event',function(){
    return view('event');
});
Route::get('/gallery',function(){
    return view('gallery');
});

Route::get('multiple', function () {
    return 'jfb';
});
Route::get('/committee',function(){
    return view('committee');
});
Route::get('/directory',function(){
    return view('directory');
});
Route::get('/career',function(){
    $internships = internships::all();
    return view('career')->with('internships', $internships);
});
Route::get('/contact',function(){
    return view('contact');
});
Route::group(['domain' => 'alumniportal.{account}.test'], function () {
    Route::get('multiple', function ($account) {
        return('snds');
    });
});

Auth::routes(['verify' => true]);

Route::get('/alumnidashboard', 'HomeController@index')->name('alumni.auth');

Route::get('/directoratedashboard','DirectorateController@dashboard')->name('directorate.auth');
Route::get('/publishnotice','DirectorateController@publishnotice')->name('directorate.publishnotice');
Route::get('/location','DirectorateController@location')->name('directorate.location');
Route::get('/addcollege', [
    'uses' => 'DirectorateController@addcollege',
    'as'   => 'addcollege'
]);



Route::get('/collegedashboard','CollegeController@dashboard')->name('college.auth');

Route::get('/collegepage1','StudentController@dashboard')->name('student1.auth');

Route::get('/findalumni','CollegeController@findalumni')->name('college.find');

Route::get('/posts','CollegeController@posts')->name('college.posts');

Route::get('/createclgposts','CollegeController@createposts')->name('college.createposts');

Route::get('/funding','AlumniController@funding')->name('alumni.funding');

Route::get('/newsletter','AlumniController@newsletter')->name('alumni.newsletter');
Route::get('/addreview','AlumniController@addreview')->name('alumni.addreview');
Route::get('/internship','AlumniController@internship')->name('alumni.internship');

Route::get('/createvent', 'CollegeController@createvent')->name('college.createvent');

Route::post('/college/create', [
    'uses' => 'CollegeController@insert',
    'as' => 'college.save'
]);

Route::post('/submitreview', [
    'uses' => 'AlumniController@submitreview',
    'as' => 'alummni.submitreview'
]);

Route::post('/storeinternship', [
    'uses' => 'AlumniController@storeinternship',
    'as' => 'alumni.storeinternship'
]);

Route::post('/storevent', [
    'uses' => 'CollegeController@storevent',
    'as' => 'college.storevent'
]);

Route::post('/viewalumni', [
    'uses' => 'AlumniController@viewalumni',
    'as' => 'alumni.viewalumni'
]);
Route::post('/dashboard', [
    'uses' => 'DirectorateController@dashboard',
    'as' => 'directorate.dashboard'
]);

Route::get('/editprofile','AlumniController@editprofile')->name('alumni.auth2');
Route::get('/conventions','AlumniController@conventions')->name('alumni.auth2');

Route::get('/verifications', [
    'uses' => 'CollegeController@verifications',
    'as'   => 'college.verification'
]);
Route::get('/alumni/verify/{id}', [
    'uses' => 'AlumniController@verify',
    'as'   => 'alumni.verify'
]); 

Route::get('/viewcollege/{name}', [
    'uses' => 'DirectorateController@viewalumnibyclgname',
    'as'   => 'directorate.viewalumnibyclgname'
]); 
Route::get('/verifiedalumnis', [
    'uses' => 'CollegeController@verifiedalumnis',
    'as'   => 'college.verifiedalumni'
]);

Route::get('/viewcolleges', [
    'uses' => 'DirectorateController@viewcolleges',
    'as'   => 'dir.viewcollege'
]);

Route::get('/analysis', [
    'uses' => 'CollegeController@analysis',
    'as'   => 'college.analysis'
]);

Route::get('/yrclgrevs', [
    'uses' => 'CollegeController@yrclgrevs',
    'as'   => 'college.yrclgrevs'
]);


Route::get('/alumnitable', [
    'uses' => 'AlumniController@alumnitable',
    'as'   => 'alumni.alumnitable'
]);

Route::get('/prediction', [
    'uses' => 'CollegeController@prediction',
    'as'   => 'college.prediction'
]);
Route::get('/myevents', [
    'uses' => 'CollegeController@myevents',
    'as'   => 'college.myevents'
]);
Route::get('/myevent/{id}', [
    'uses' => 'CollegeController@mysinglevent',
    'as'   => 'college.mysinglevent'
]);
Route::get('/editevent/{id}', [
    'uses' => 'CollegeController@editevent',
    'as'   => 'college.editevent'
]);
Route::put('/updatevent/{id}', [
    'uses' => 'CollegeController@updatevent',
    'as'   => 'college.updatevent'
]);
Route::get('/deletevent/{id}', [
    'uses' => 'CollegeController@deletevent',
    'as'   => 'college.deletevent'
]);
Route::get('/dirclgreviews', [
    'uses' => 'DirectorateController@collegerevs',
    'as'   => 'dire.collegerevs'
]);
Route::get('/userslist', [
    'uses' => 'AlumniController@userslist',
    'as' => 'alumni.userslist'
]);
Route::get('/alumnievents', [
    'uses' => 'AlumniController@alumnievents',
    'as' => 'alumni.alumnievents'
]);
Route::get('/alumnievents/{id}', [
    'uses' => 'AlumniController@alumnisinglevent',
    'as' => 'alumni.alumnisinglevent'
]);
Route::put('/updateprofile/{id}', [
    'uses' => 'AlumniController@updateprofile',
    'as'   => 'alumni.updateprofile'
]);
Route::get('/directoratevent', [
    'uses' => 'DirectorateController@directoratevent',
    'as' => 'directorate.directoratevent'
]);
Route::get('/directoratevent/{id}', [
    'uses' => 'DirectorateController@directoratesinglevent',
    'as' => 'directorate.directoratesinglevent'
]);
Route::get('/reviewclg/{name}', [
    'uses' => 'DirectorateController@directoratesingleclgreviews',
    'as' => 'directorate.directoratesingleclgreviews'
]);
Route::get('/viewprofile/{id}', [
    'uses' => 'AlumniController@viewprofile',
    'as' => 'alumni.viewprofile'
]);
Route::get('/friendrequests', [
    'uses' => 'AlumniController@friendrequests',
    'as' => 'alumni.friendrequests'
]);
Route::get('/acceptfriendrequest/{id}', [
    'uses' => 'AlumniController@acceptfriendrequest',
    'as' => 'alumni.acceptfriendrequest'
]);
Route::get('/rejectfriendrequest/{id}', [
    'uses' => 'AlumniController@rejectfriendrequest',
    'as' => 'alumni.rejectfriendrequest'
]);
Route::get('/confirmfriendrequest/{id}', [
    'uses' => 'AlumniController@confirmfriendrequest',
    'as' => 'alumni.confirmfriendrequest'
]);
Route::get('/friends', [
    'uses' => 'AlumniController@friends',
    'as' => 'alumni.friends'
]);
Route::match(['get','post'], '/addfriend/{id}', [
    'uses' => 'AlumniController@addfriend',
    'as' => 'alumni.addfriend'
]);
Route::match(['get','post'], '/unfriend/{id}', [
    'uses' => 'AlumniController@unfriend',
    'as' => 'alumni.unfriend'
]);
Route::get('/myinternships', [
    'uses' => 'AlumniController@myinternships',
    'as'   => 'AlumniController.myinternships'
]);
Route::get('/myinternships/{id}', [ 
    'uses' => 'AlumniController@singleinternship',
    'as'   => 'AlumniController.singleinternship'
]);
Route::get('/editinternship/{id}', [ 
    'uses' => 'AlumniController@editinternship',
    'as'   => 'alumni.editinternship'
]);
Route::put('/updateinternship/{id}', [
    'uses' => 'AlumniController@updateinternship',
    'as'   => 'alumni.updateinternship'
]);
Route::get('/deleteinternship/{id}', [
    'uses' => 'AlumniController@deleteinternship',
    'as'   => 'alumni.deleteinternship'
]);
Route::post('/applicants/{id}', [
    'uses' => 'AlumniController@applicants',
    'as'   => 'alumni.applicants'
]);
Route::get('/applications/{id}', [
    'uses' => 'AlumniController@applications',
    'as'   => 'alumni.applications'
]);
Route::get('/downloadresume/{id}', [
    'uses' => 'AlumniController@downloadresume',
    'as'   => 'alumni.downloadresume'
]);
Route::get('/deleteapplication/{id}', [
    'uses' => 'AlumniController@deleteapplication',
    'as'   => 'alumni.deleteapplication'
]);
Route::get('/mylocation', [
    'uses' => 'AlumniController@mylocation',
    'as'   => 'alumni.location'
]);
Route::post('/mylocation/store', [
    'uses' => 'AlumniController@storelocation',
    'as'   => 'alumni.storelocation'
]);

Route::post('/mylocation/edit', [
    'uses' => 'AlumniController@editlocation',
    'as'   => 'alumni.editlocation'
]);

Route::get('/userlocations', [
    'uses' => 'AlumniController@userlocations',
    'as'   => 'alumni.userlocations'
]);
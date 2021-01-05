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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/myevents',function(){
    return view('college.myevent');
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
    return view('career');
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

Route::post('/college/create', [
    'uses' => 'CollegeController@insert',
    'as' => 'college.save'
]);

Route::post('/submitreview', [
    'uses' => 'AlumniController@submitreview',
    'as' => 'alummni.submitreview'
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
Route::get('/verifiedalumnis', [
    'uses' => 'CollegeController@verifiedalumnis',
    'as'   => 'college.verifiedalumni'
]);

Route::get('/viewcolleges', [
    'uses' => 'DirectorateController@viewcolleges',
    'as'   => 'dir.viewcollege'
]);
<<<<<<< Updated upstream
=======

Route::get('/analysis', [
    'uses' => 'CollegeController@analysis',
    'as'   => 'college.analysis'
]);
>>>>>>> Stashed changes

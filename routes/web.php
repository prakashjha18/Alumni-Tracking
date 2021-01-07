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

Route::get('/createvent', 'CollegeController@createvent')->name('college.createvent');

Route::post('/college/create', [
    'uses' => 'CollegeController@insert',
    'as' => 'college.save'
]);

Route::post('/submitreview', [
    'uses' => 'AlumniController@submitreview',
    'as' => 'alummni.submitreview'
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
Route::get('/friendslist', [
    'uses' => 'AlumniController@friendslist',
    'as' => 'alumni.friendslist'
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
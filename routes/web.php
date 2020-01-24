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
Route::group(['domain' => 'alumniportal.{account}.test'], function () {
    Route::get('multiple', function ($account) {
        return('snds');
    });
});
Auth::routes(['verify' => true]);
Route::get('/alumnidashboard', 'HomeController@index')->name('alumni.auth');
Route::get('/directoratedashboard','DirectorateController@dashboard')->name('directorate.auth');
Route::get('/addcollege','DirectorateController@addcollege')->name('directorate.addcollege');
Route::get('/collegedashboard','CollegeController@dashboard')->name('college.auth');
Route::get('/alumnidashboard','AlumniController@dashboard')->name('alumni.auth');
Route::get('/collegepage1','StudentController@dashboard')->name('student1.auth');
Route::get('/findalumni','CollegeController@findalumni')->name('college.find');
Route::get('/posts','CollegeController@posts')->name('college.posts');
//Route::get('/alumnidashboard','AlumniController@dashboard2')->name('alumni.auth');
Route::get('/funding','AlumniController@funding')->name('alumni.funding');
Route::get('/newsletter','AlumniController@newsletter')->name('alumni.newsletter');
Route::get('/internship','AlumniController@internship')->name('alumni.internship');
Route::post('/college/create', [
    'uses' => 'CollegeController@insert',
    'as' => 'college.save'
]);
Route::get('/editprofile','AlumniController@editprofile')->name('alumni.editprofile');
Route::get('/conventions','AlumniController@conventions')->name('alumni.conventions');
Route::get('/verifications','CollegeController@verifications')->name('college.verifications');

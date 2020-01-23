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



// Route::get('/multiple', function () {
 
//     $url = parse_url(URL::all());
 
//     $domain = explode('.', $url['host']);
 
//     $subdomain = $domain[0];
 
//     $name = $subdomain;
 
//     dd($name); 
 
//     // write the rest of your code.
 
// });

// Route::group(array('domain' => '{subdomain}.alumniportal.test'), function () {
 
//     Route::get('/multiple', function ($subdomain) {
 
//         $name =$subdomain;
 
//         dd($name);
 
//     });
// });
Route::get('multiple', function () {
    return 'jfb';
});
Route::group(['domain' => 'alumniportal.{account}.test'], function () {
    Route::get('multiple', function ($account) {
        return('snds');
    });
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/directoratedashboard','DirectorateController@dashboard')->name('directorate.auth');
Route::get('/collegedashboard','CollegeController@dashboard')->name('college.auth');
Route::get('/findalumni','CollegeController@findalumni')->name('college.find');

Route::get('/alumnidashboard','AlumniController@dashboard2')->name('alumni.auth2');
Route::get('/funding','AlumniController@funding')->name('alumni.auth2');
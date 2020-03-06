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
    return view('backend');


});

Route::get('gethome', function () {
    echo "I'm get home";


});


Route::get('/getcontact', function () {

echo "I am getcontact";

});
Route::resource('degree','DegreeController');
Route::resource('doctor','DoctorController');
Route::resource('patient','PatientController');
Route::resource('schedule','ScheduleController');
Route::resource('booking','BookingController');







Route::get('frontend','FrontController@index')->name('index');
// Route::get('register','FrontController@register')->name('patient');
// Route::get('user_booking','FrontController@bookng')->name('booking');
// Route::get('contact','FrontController@contact')->name('contact');
Route::get('doctor_list','FrontController@doctor')->name('doctor');
Route::get('patient_list','FrontController@patient')->name('patient');
Route::get('schedule_list','FrontController@schedule')->name('schedule');
// Route::get('about','FrontController@about')->name('about');
Route::get('getSchedule/{id}','ScheduleController@getSchedule');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

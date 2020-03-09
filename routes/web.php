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

Route::get('dashboard', function () {
    return view('backend');


})->name('dashboard');

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




Route::get('/','FrontController@index')->name('index');
Route::get('contact','FrontController@contact')->name('contact');
// Route::get('register','FrontController@register')->name('patient');
Route::get('doctorbooking','FrontController@booking')->name('doctorbooking');
Route::get('patientbooking','FrontController@patientbooking')->name('patientbooking');
// Route::get('contact','FrontController@contact')->name('contact');
Route::get('doctorlist','FrontController@doctor')->name('doctorlist');
Route::get('patientlist','FrontController@patient')->name('patientlist');
Route::get('bookingschedule','FrontController@schedule')->name('bookingschedule');
Route::get('about','FrontController@about')->name('about');
Route::get('getSchedule/{id}','ScheduleController@getSchedule');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

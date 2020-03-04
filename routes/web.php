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


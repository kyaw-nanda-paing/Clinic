<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;
use App\Booking;
use App\Schedule;


class FrontController extends Controller
{
    public function index($value='')
    {
    	$doctors=Doctor::all();
    	$schedules=Schedule::all();
    	$bookings=Booking::all();

    	return view('frontend.index', compact('doctors','schedules','bookings'));
    }

    // public function register($value='')
    // {
    // 	$patients=Patient::all();
    // 	return view('frontend.register', compact('patients'));
    // }

    public function doctor($value='')
    {
        $doctors=Doctor::all();
        $schedules=Schedule::all();

        return view('frontend.doctor', compact('doctors','schedules'));
    }

    public function patient($value='')
    {
        $patients=Patient::all();
        $bookings=Booking::all();

        return view('frontend.patient', compact('patients','bookings'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;
use App\Booking;
use App\Schedule;
use App\Degree;
use Auth;


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

    public function about($value='')
    {

        return view('frontend.about');
    }

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

    public function booking($value='')
    {
        $user = Auth::user()->id;
        $doctor = Doctor::where('user_id',$user)->first();
        //$bookings=Booking::where('')
        // $bookings = DB::table('bookings')
        //     ->join('schedules', 'schedules.id', '=', 'bookings.schedules_id')
        //     ->select('bookings.*', 'schedules.doctor_id == '.$user)
        //     ->get();
        //     dd($bookings);
        return view('frontend.booking', compact('doctor'));
    }

    public function patientbooking($value='')
    {
        $user = Auth::user()->id;
        $patient = Patient::where('user_id',$user)->first();
        return view('frontend.patientbooking', compact('patient'));
    }

    public function schedule($value='')
    {
        $schedules=Schedule::all();
        $bookings=Booking::all();
        $degrees=Degree::all();
        $doctors=Doctor::all();
        $user=Auth::user();

        return view('frontend.schedule', compact('bookings','schedules','degrees','doctors','user'));
    }

    public function contact($value='')
    {

        return view('frontend.contact');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('frontend.patientbooking');
    }
}

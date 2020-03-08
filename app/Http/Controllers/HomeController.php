<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        // $schedules=Schedule::all();
        // $bookings=Booking::all();
        // $degrees=Degree::all();
        // $doctors=Doctor::all();
        // return view('backend.schedule.index', compact('bookings','schedules','degrees','doctors'));
    }
}

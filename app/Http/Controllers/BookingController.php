<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Schedule;
use App\Patient;
use App\Doctor;
use Auth;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('backend.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=Patient::all();
        $doctors=Doctor::all();
        $bookings=Booking::all();
        $schedules=Schedule::all();
        return view('backend.schedule.create',compact('bookings','doctors','patients','schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "note"=>'required'
            ]);
       $book = Booking::orderBy('id','desc')->first();

       if($book == null)
       {
        $token_no = '0001';
       }
       else{
        $num = intval($book->token_no)+1;
        $token_no = sprintf('%04d',$num);
        
       }

       $bookings=New Booking;
       // dd(Auth::user()->patient);
       $bookings->patient_id=Auth::user()->patient->id;
       $bookings->schedule_id=request('time');
       $bookings->note=request('note');
       $bookings->token_no=$token_no;
       $bookings->save();

       return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

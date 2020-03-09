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
    public function store(Request $request )
    {
        // dd($request);
        $request->validate([
            "note"=>'required'
            ]);
       $book = Booking::orderBy('id','desc')->first();
       $bookings=Booking::where('schedule_id',request('schedule_id'))->orderBy('id','DESC')->first();
      if(!empty($bookings->token_no)){
         $num = intval($bookings->token_no)+1;
          $token_no = sprintf('%04d',$num);
      }else{
        $token_no='0001';
      }
       $count = Booking::all()->count();
       $pid = request('pid');
       $booking = Booking::where('patient_id',$pid)->first();
       
        //dd(Booking::findOrFail($pid));
      // dd($booking);
       if ($count >= 10) {
       
           # code...
        return redirect()->route('bookingschedule')->with('status1','Booking Limit is Full!!!');
       }elseif ($booking) {
           # code...
        return redirect()->route('bookingschedule')->with('status','Already Booked!!!');
        // return redirect()->route('bookingschedule')->with('status','Booking Limit is Full!!!');
       }
       else{

        
           $bookings=New Booking;
           // dd(Auth::user()->patient);
           $bookings->patient_id=Auth::user()->patient->id;
           $bookings->schedule_id=request('schedule_id');
           $bookings->note=request('note');
           $bookings->token_no=$token_no;
           $bookings->save();

           return redirect()->route('patientbooking');
       }
   
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
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('patientbooking');
    }
}

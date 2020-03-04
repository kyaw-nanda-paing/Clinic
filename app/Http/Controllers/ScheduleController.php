<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Schedule;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view('backend.schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctor::all();
        $schedules=Schedule::all();
        return view('backend.schedule.create',compact('schedules','doctors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "doctor"=>'required',
                "date"=>'required',
                "time"=>'required',
                

        ]);

               $schedules = new Schedule;
               $schedules->doctor_id= request('doctor');
        $schedules->date = request('date');
        $schedules->time = request('time');
        

        $schedules->save();

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
       {
        $schedules = Schedule::findOrFail($id);
        return view('backend.scheduled.show',compact('schedules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
 {

        $schedules = Schedule::find($id);
        return view('backend.schedule.edit',compact('schedules'));

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
        $request->validate([
                "doctor_id"=>'required',
                "date"=>'required',
                "time"=>'required',

        ]);
               $schedules = Schedule::find();
               $schedules->doctor_id= request('doctor_id');
        $schedules->date = request('date');
        $schedules->time = request('time');

        $schedules->save();

        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        $schedules = Schedule::find($id);
        $schedules->delete();
                return redirect()->route('schedule.index');
    }
}
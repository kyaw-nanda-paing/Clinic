<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Degree;
use Spatie\Permission\Models\Role;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('backend.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::all();
        $degrees=Degree::all();
        return view('backend.doctor.create',compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name"=>'required|min:5|max:191',
        //     "email"=>'required|unique',
        //     "profi"=>'required|mimes:jpeg,jpg,png',
        //     "address"=>'required',
        //     "phone"=>'required|min:5|max:191',
        //     "gridRadios"=>'required',
        //     "Dob"=>'required'

        // ]);
        if ($request->hasfile('profi')) 
        {
           $profi = $request->file('profi');
           $upload_dir = public_path().'/storage/doctor/';
           $name = time().'.'.$profi->
           getClientOriginalExtension();
           $profi->move($upload_dir,$name);
           $path = '/storage/doctor/'.$name;
       } 

       $user=New User;
       $user->name=request('name');
       $user->email=request('email');
       $user->password=Hash::make('12345');
       $user->save();
       
       $doctors = new Doctor;
       $doctors->user_id=$user->id;
       // $doctors=new Doctor;
       $doctors->profile =$path;
       $doctors->address=request ('address');
       $doctors->phone=request ('phone');
       $doctors->gender=request ('gridRadios');
       $doctors->dob=request ('Dob');
       $doctors->degree_id=request('degree');
       $doctors->save();
       
       $user->assignRole('Doctor');

       return redirect()->route('doctor.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = Doctor::findOrFail($id);
        return view('backend.doctor.show',compact('doctors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors=Doctor::find($id);
        $degrees=Degree::all();
        return view('backend.doctor.edit',compact('doctors','degrees'));
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
        // $request->validate([
        //     "address"=>'required',
        //     "profi"=>'required|mimes:jpeg,jpg,png',
        //     "phone"=>'required|min:5|max:191',
        //     "gridRadios"=>'required',
        //     "degree"=>'required',
        //     "Dob"=>'required'

        // ]);
        if ($request->hasfile('profi')) 
        {
           $profi = $request->file('profi');
           $upload_dir = public_path().'/storage/doctor/';
           $name = time().'.'.$profi->
           getClientOriginalExtension();
           $profi->move($upload_dir,$name);
           $path = '/storage/doctor/'.$name;
       }
       else{
        $path = request('oldprofi');
    }
    $doctors=Doctor::find($id);
    $doctors->profile =$path;
    $doctors->address=request ('address');
    $doctors->phone=request ('phone');
    $doctors->gender=request ('gridRadios');
    $doctors->dob=request ('Dob');
    $doctors->degree_id=request('degree');
    $doctors->save();

    return redirect()->route('doctor.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors = Doctor::find($id);
        $doctors->delete();
        return redirect()->route('doctor.index');
    }
}

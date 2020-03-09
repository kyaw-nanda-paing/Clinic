<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use Spatie\Permission\Models\Role;
use Auth;
use Illuminate\Support\Facades\URL;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('backend.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::all();
        $patients=Patient::all();
        return view('backend.patient.create',compact('patients'));
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
        // $request->validate([
        //     "name"=>'required|min:5|max:191',
        //     "profi"=>'required',
        //     "address"=>'required',
        //     "phone"=>'required|min:5|max:191',
        //     "email"=>'required|unique',
        //     "Dob"=>'required',
        //     "gridRadios"=>'required',
        
        // ]);
        if ($request->hasfile('profi')) 
        {
           $profi = $request->file('profi');
           $upload_dir = public_path().'/storage/patient/';
           $name = time().'.'.$profi->
           getClientOriginalExtension();
           $profi->move($upload_dir,$name);
           $path = '/storage/patient/'.$name;
       } 

       $user=New User;
       $user->name=request('name');
       $user->email=request('email');
       $user->password=Hash::make('6789');
       $user->save();
       
       $patients = new Patient;
       $patients->user_id=$user->id;
       // $patients=new Patient;
       $patients->profile =$path;
       $patients->address=request ('address');
       $patients->phone=request ('phone');
       $patients->gender=request ('gridRadios');
       $patients->dob=request ('Dob');
       $patients->save();
       
       $user->assignRole('Patient');
        if (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=='patient.create') 
        {
            return redirect()->route('patient.index');
        }else
        {
          Auth::loginUsingId($user->id);

          return redirect()->route('patientlist');
        }

     //  return redirect()->route('patient.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = Patient::findOrFail($id);
        return view('backend.patient.show',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients=Patient::find($id);
        return view('backend.patient.edit',compact('patients'));
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
        //     "Dob"=>'required'

        // ]);
        if ($request->hasfile('profi')) 
        {
           $profi = $request->file('profi');
           $upload_dir = public_path().'/storage/patient/';
           $name = time().'.'.$profi->
           getClientOriginalExtension();
           $profi->move($upload_dir,$name);
           $path = '/storage/patient/'.$name;
       }
       else{
        $path = request('oldprofi');
    }
    $patients=Patient::find($id);
    $patients->profile =$path;
    $patients->address=request ('address');
    $patients->phone=request ('phone');
    $patients->gender=request ('gridRadios');
    $patients->dob=request ('Dob');
    $patients->save();

    return redirect()->route('patient.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect()->route('patient.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::all();
        return view('backend.degree.index',compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.degree.create');
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
                "name"=>'required|min:5|max:191',
                "photo"=>'required|mimes:jpeg,jpg,png'

        ]);
        if ($request->hasfile('photo')) 
        {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/degree/';
           $name = time().'.'.$photo->
           getClientOriginalExtension();
           $photo->move($upload_dir,$name);
           $path = '/storage/degree/'.$name;
        }  
        $degree = new Degree;
        $degree->name = request('name');
        $degree->photo =$path;

        $degree->save();

        return redirect()->route('degree.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $degrees = Degree::findOrFail($id);
        return view('backend.degree.show',compact('degrees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $degrees = Degree::find($id);
        return view('backend.degree.edit',compact('degrees'));

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
                "name"=>'required|min:5|max:191',
                "photo"=>'required|mimes:jpeg,jpg,png'

        ]);
        if ($request->hasfile('photo')) 
        {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/degree/';
           $name = time().'.'.$photo->
           getClientOriginalExtension();
           $photo->move($upload_dir,$name);
           $path = '/storage/degree/'.$name;
        }        //upload//3
        //store data//4
        $degree = Degree::find($id);
        $degree->name = request('name');
        $degree->photo =$path;
        //dd($degree);
        $degree->save();

        return redirect()->route('degree.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degrees = Degree::find($id);
        $degrees->delete();
                return redirect()->route('degree.index');
    }
}

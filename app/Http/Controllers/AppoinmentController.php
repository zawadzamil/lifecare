<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user())
        {
            return view('appoinment');

        }
        else{
            return view('auth.login')->with('failed','You Must Login/ Register First');
        }
    }
    public function checkDept($id)
    {
        if(\Auth::user())
        {
            return view('appoinmentToDept')->with('id',$id);

        }
        else{
            return view('auth.login')->with('failed','You Must Login/ Register First');
        }

    }
    public function checkDoc($id)
    {
        if(\Auth::user())
        {
            return view('appoinmentToDoc')->with('id',$id);

        }
        else{
            return view('auth.login')->with('failed','You Must Login/ Register First');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $appoinment = Appoinment::create([
            'user_id'=>\Auth::user()->id,
            'department_id'=> $request->department_id,
            'doctor_id'=> $request->doctor_id,
            'date' =>$request->date,
            'time' =>$request->time,
            'user_name'=>$request->name,
            'user_phone'=>$request->phone,
            'message' => $request-> message,
        ]);
        $appoinment->save();
        return redirect()->back()->with('success','Your appoinment is fixed!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

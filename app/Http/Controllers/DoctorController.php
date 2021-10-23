<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Message;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().rand().'.'.$request->image->extension();

        $request->image->move(public_path('assets/images/docs/'), $imageName);
        $doctor = Doctor::create([
            'name' => $request->name,
            'image' =>$imageName,
            'type' =>$request->type,
            'degree' => $request->degree,
            'address'=> $request->address,
            'phone' =>$request->phone,
            'email'=> $request->email,
            'description' => $request->description,
            'department_id'=>$request->department_id,

        ]);
        $doctor->save();
        return redirect()->back();
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
        $doctor = Doctor::where('id',$id)->get();
        return view('doctor-single')->with('doctor',$doctor);
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
    public function message(Request $request)
    {
        $message = Message::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'topic' =>$request->topic,
            'message' =>$request->message,
        ]);
        $message->save();
        return redirect()->back()->with('success','Your Message is sent Successfully');
    }
}

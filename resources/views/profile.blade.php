@extends('layouts.mainLayout')
@section('body_parts')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">

                        <h1 class="text-capitalize mb-5 text-lg">User Profile</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
    $appoinment = \App\Models\Appoinment::where('user_id',Auth::user()->id)->get();


    @endphp
    <section class="section doctor-single">
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center" >
            <div class="card p-4" style="background-color: #1b1e21;color: floralwhite;">
                <div class=" image d-flex flex-column justify-content-center align-items-center">
                    <button class="btn btn-secondary">
                        <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
                    </button>
                    <span class="name mt-3">{{Auth::user()->name}}</span>
                    <span class="idd">{{Auth::user()->email}}</span>
                    @foreach($appoinment as $ass)
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">

                        <span class="idd1" style="margin-top: 5px;">Appoinment Date: {{$ass->date}}</span>


                    </div>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2">

                            <span class="idd1" > Time: {{$ass->time}}</span>

                    </div>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2">

                            <span class="idd1" > Doctor's Name: {{\App\Models\Doctor::where('id',$ass->doctor_id)->value('name')}}</span>

                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2">

                            <span class="idd1" > Department: {{\App\Models\Departments::where('id',$ass->department_id)->value('name')}}</span>

                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center gap-2">

                            <span class="idd1" > Your Phone No: {{$ass->user_phone}}</span>

                        </div>
                    @endforeach

                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined {{Auth::user()->created_at}}</span> </div>
                </div>
            </div>
        </div>

    </section>


    @endsection

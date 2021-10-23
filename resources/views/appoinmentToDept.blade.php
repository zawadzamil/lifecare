

@extends('layouts.mainLayoutFrom')
@section('body_parts')
    @php
        $depts = \App\Models\Departments::all();
        $docs = \App\Models\Doctor::all();
        $selDept = \App\Models\Departments::where('id',$id)->get();
    @endphp
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Book your Seat</span>
                        <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                          <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                          <li class="list-inline-item"><span class="text-white">/</span></li>
                          <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Session Status -->
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li style="color: #209c00;text-align: center;">{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <section class="appoinment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3">Call for an Emergency Service!</span>
                        <h2 class="text-color mt-3">+88028836000 </h2>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Book an appoinment</h2>
                        <p class="mb-4">Select department and a docor to make an appoinment.
                            We will call you and let you know about your confirmation</p>
                        <form id="#" class="appoinment-form" method="post" action="saveAppinment">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="department_id" required>
                                            <option  selected="true">{{$selDept[0]->name}}</option>
                                            @foreach($depts as $dept)
                                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect2" name="doctor_id" required>
                                            <option selected="true" disabled>Select Doctors</option>
                                            @foreach($docs as $doc)
                                                <option value="{{$doc->id}}">{{$doc->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" id="time" type="time" class="form-control" placeholder="Time" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message" maxlength="255"></textarea>
                            </div>

                            <button class="btn btn-dark" type="submit">Make Appoinment<i class="icofont-simple-right ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection


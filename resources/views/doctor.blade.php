@extends('layouts.mainLayout')
@section('body_parts')


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Doctors</span>
          <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
@php
$doctors = \App\Models\Doctor::all();

@endphp

<!-- portfolio -->
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Doctors</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>We provide a wide range of creative services adipisicing elit.
                        Use Best Doctors when you or an eligible dependent </p>
                </div>
            </div>
        </div>



    <div class="row  portfolio-gallery">
        @foreach($doctors as $doctor)
      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 " >
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="public/assets/images/docs/{{$doctor->image}}" alt="doctor-image" class="img-fluid w-100">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"> <a href="{{url('doctor_single',$doctor->id)}}"> {{$doctor->name}}</a></h4>
                	<p>{{\App\Models\Departments::where('id',$doctor->department_id)->value('name')}}</p>
                </div>
               <a href="{{url('doctor_single',$doctor->id)}}"> <button class="btn btn-dark ">Details</button> </a>
	      	</div>
      	</div>
            @endforeach







    </div>
  </div>
</section>
<!-- /portfolio -->
<section class="section cta-page" style="background-image: url('public/assets/images/bg/docbg.jpg');background-repeat: no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="{{url('appoinment')}}" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

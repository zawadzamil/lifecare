

@extends('layouts.mainLayoutFrom')
@section('body_parts')
@php
$depts = \App\Models\Departments::all();
@endphp
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">

          <h1 class="text-capitalize mb-5 text-lg">Department Details</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="../public/assets/images/dept/{{$department[0]->image}}"  alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md">{{$department[0]->name}}</h3>
					<div class="divider my-4"></div>
					<p class="lead">{{$department[0]->description}}</p>






					<a href="{{url('appoinmentToDept',$department[0]->id)}}" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5" style="overflow-y: scroll; height:400px;">
					<h5 class="mb-4">Departments</h5>
                    @foreach($depts as $dept)
					<ul class="list-unstyled">

					  <li class="d-flex justify-content-between align-items-center">
					    <a href="{{url('department',$dept->id)}}">{{$dept->name}}</a>

					  </li>


					</ul>
                    @endforeach


				</div>
                <div class="sidebar-contatct-info mt-4">
                    <p class="mb-0">Need Urgent Help?</p>
                    <h3>+88 02 8836000</h3>
                </div>
			</div>
		</div>
	</div>
</section>
@endsection

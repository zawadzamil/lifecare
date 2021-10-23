@extends('layouts.mainLayoutFrom')
@section('body_parts')


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">

          <h1 class="text-capitalize mb-5 text-lg">Doctor Details</h1>

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


<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
                    <img src="../public/assets/images/docs/{{$doctor[0]->image}}" alt="doctor-image" class="img-fluid w-100">


				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md">{{$doctor[0]->name}}</h2>
					<h4 class="display-4" style="font-size: 20px;">{{$doctor[0]->degree}}</h4>
					<h5 class="display-5" style="font-size: 20px;">{{$doctor[0]->type}}</h5>
					<div class="divider my-4"></div>

					<p>{{$doctor[0]->description}}</p>

					<a href="{{url('appoinmentToDoc',$doctor[0]->id)}}" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="section doctor-skills" style="padding: 40px;">
	<div class="container">
		<div class="row">

			<div class="col-lg-6" style="background-color: #d9dcef;margin-left: 10%;" >
				<div class="skill-list">
					<h5 class="mb-4" style="margin-top: 5%;">Contact Info</h5>
					<ul class="list-unstyled department-service">

						<li><i class=" mr-2"></i>Phone : {{$doctor[0]->phone}}</li>
						<li><i class=" mr-2"></i>Email : {{$doctor[0]->email}}</li>
                        <li><i class=" mr-2"></i>Address : {{$doctor[0]->address}}</li>

					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar-widget  gray-bg p-4">
					<h5 class="mb-4">Make Appoinment</h5>

					<ul class="list-unstyled lh-35">
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Monday - Friday</a>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Saturday</a>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Sunday</a>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3 class="text-color-2">+88 02 8836000</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

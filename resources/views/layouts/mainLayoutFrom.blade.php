<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Lifecare</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/assets/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="../public/assets/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="../public/assets/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../public/assets/plugins/slick-carousel/slick/slick-theme.css">
    <link
        href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
        rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../public/assets/css/style.css">

</head>

<body id="top">
@php
    $dept = \App\Models\Departments::all();
    $deptCount = \App\Models\Departments::get()->count();
    $half =round($deptCount/2) ;
    $other = $deptCount-$half;
    $fstColumn = \App\Models\Departments::take($half)->get();
    $sndColumn = \App\Models\Departments::orderBy('created_at','desc')->take($other)->get();

@endphp

<header>
    <div class="header-top-bar" style="background-color: #2e022d;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><i class="icofont-support-faq mr-2"></i>info@lifecare.com</li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Nikunja 2, Khilkhet, Dhaka </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+88 02 8836000" >
                            <span>Call Now : </span>
                            <span class="h4">+88 02 8836000</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="../public/assets/images/logo.PNG" alt="" class="img-fluid" style="width: 173px;height:47px; ">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('service')}}">Services</a></li>
                    <!-- Department Dropdown -->

                    <li class="nav-item dropdown btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
                        <div class="dropdown-menu dropdown" style="width: 600px;" aria-labelledby="dropdownMenu1">

                            <div class="container">

                                <div class="row">

                                    <div class="col-md-4 offset-md-1">
                                        @foreach($fstColumn as $item)
                                            <a class="dropdown-item" href="{{url('department',$item->id)}}">{{$item->name}}</a>
                                        @endforeach

                                    </div>
                                    <div class="col-md-4 offset-md-1">
                                        @foreach($sndColumn as $item)
                                            <a class="dropdown-item" href="{{url('department',$item->id)}}">{{$item->name}}</a>
                                        @endforeach

                                    </div>
                                </div>

                            </div>

                        </div>
                    </li>
                    <!-- End Department Dropdown -->



                    <li class="nav-item"><a class="nav-link" href="{{url('doctors')}}">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                    @if(Auth::user())
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user">{{Auth::user()->name}}</i> </a></li>
                        <li class="nav-item">
                            <form method="POST"  action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link shadow-none btn" style="background-color:transparent" >Logout</button>
                            </form>
                        </li>
                    @else

                        <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Login</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>



@yield('body_parts')







<!-- footer Start -->
<footer class="footer section " style="background-color: #0b0929; color: #c4d5a5;" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="../public/assets/images/logo3.png" alt="" class="img-fluid">
                    </div>
                    <p>At Lifecare Hospital, providing our patients with a trusted and compassionate environment for healthcare is central to our mission. We draw strength from our purpose - help and to heal.</p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/zawadzaml"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/"><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Department</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{url('department',4)}}">CARDIAC SURGERY </a></li>
                        <li><a href="{{url('department',6)}}">COVID WING</a></li>
                        <li><a href="{{url('department',12)}}">HEALTH SCREENING</a></li>
                        <li><a href="{{url('department',14)}}">NEONATOLOGY</a></li>
                        <li><a href="{{url('department',17)}}">PAEDIATRICS</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Services</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{url('service')}}">Blood Bank</a></li>
                        <li><a href="{{url('service')}}">CHEMOTHERAPY</a></li>
                        <li><a href="{{url('service')}}">Covid 19 Home Care</a></li>
                        <li><a href="{{url('service')}}">Day Care</a></li>
                        <li><a href="{{url('service')}}">More</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890">info@lifecare.com</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890">+88 02 8836000</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">Lifecare</span> by <a href="https://themefisher.com/" target="_blank">Zawad Zamil</a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="../public/assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="../public/assets/plugins/bootstrap/js/popper.js"></script>
<script src="../public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/assets/plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="../public/assets/plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="../public/assets/plugins/counterup/jquery.waypoints.min.js"></script>

<script src="../public/assets/plugins/shuffle/shuffle.min.js"></script>
<script src="../public/assets/plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="../public/assets/plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="../public/assets/js/script.js"></script>
<script src="../public/assets/js/contact.js"></script>


</body>
</html>

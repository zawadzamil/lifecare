@extends('layouts.mainLayout')
@section('body_parts')


<!-- Slider Start -->
<section class="banner" style="background: url('public/assets/images/bg/banner-bg.jpg') no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Trusted and Compassionate Environment is here</span>
                    <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                    <p class="mb-4 pr-5">We are committed to  Quality,  Effectiveness,  Integration, Caring for the Community,
                         Caring for our staff and  Research & Training</p>
                    <div class="btn-container ">
                        <a href="{{url('appoinment')}}" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
                        <a href="{{url('appoinment')}}" class="btn btn-main btn-round-full">Make a appoinment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="public/assets/images/bg/about1.jpg" alt="" class="img-fluid">
                    <img src="public/assets/images/about/about3.jpg" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="public/assets/images/about/about2.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Personal care <br>& healthy living</h2>
                    <p class="mt-4 mb-5">At Lifecare Hospital, providing our patients with a trusted and compassionate environment for healthcare is central to our mission</p>

                    <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">58</span>k
                        <p>Happy People</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">700</span>+
                        <p>Surgery Comepleted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">40</span>+
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">20</span>
                        <p>Worldwide Branch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lifecare Hospital has set up a specially designed state-of-art Integrated Hospital
                        Information System to record and monitor all activities and to store patient
                        information in digital format for ease of access and long time storage.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-laboratory text-lg"></i>
                        <h4 class="mt-3 mb-3">Laboratory services</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Our central laboratories generate more clinical trial data than all other central laboratories combined.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-heart-beat-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Heart Disease</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">We have a 15 bedded Cardiac High Dependency Unit (CHDU) and an 8 bedded Post Cath Section.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-tooth text-lg"></i>
                        <h4 class="mt-3 mb-3">Dental Care</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">We have  dentists who  completed their Masters from National University of Singapore and have a 5-years working experience in Singapore.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-crutch text-lg"></i>
                        <h4 class="mt-3 mb-3">Body Surgery</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">A tummy tuck or abdominoplasty is a more cosmetic operation; it's ideal to getting the body shape you want.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-brain-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Neurosurgery is a surgical specialty that involves the conservative  management of a variety of disorders affecting the brain</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-dna-alt-1 text-lg"></i>
                        <h4 class="mt-3 mb-3">Gynecology</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Gynaecology or gynecology (see spelling differences) is the medical practice dealing with the health of the female reproductive system</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="public/assets/images/about/apoinment01.jpg" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+880-2883-6000</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Make Appoinment with Specialized Doctor from Various Departments </p>
                   <a href="{{url('appoinment')}}"><button class="btn btn-warning" >Make Appoinment<i class="icofont-simple-right ml-2"></i></button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>We served over 5000+ Patients</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>With more than 30 clinical sub specialties, our centres of
                        Excellence like Cardiac, Cancer, Renal, Surgical, Neuroscience, Mother & Child Health and Critical
                        Care Centres are staffed by the most esteemed doctors in their respective fields. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>

                    <div class="testimonial-thumb">
                        <img src="public/assets/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info ">
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            Service is perfect all good, everything is being taken care of, very grateful to Lifecare Hospital
                        </p>
                    </div>
                </div>

                <div class="testimonial-block style-2  gray-bg">
                    <div class="testimonial-thumb">
                        <img src="public/assets/images/team/test-thumb2.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="client-info">
                        <h4>Expert doctors!</h4>
                        <span>Mullar Sarth</span>
                        <p>
                            Very pleased with the doctors and other stuffs. I am very grateful to Lifecare
                        </p>
                    </div>

                    <i class="icofont-quote-right"></i>
                </div>




            </div>
        </div>
    </div>
</section>
<section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Partners who support us</h2>
                    <div class="divider mx-auto my-4"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/2.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/6.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="public/assets/images/about/6.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection

@extends('layouts.frontend.app')
@section('head')
<title>Welcome to Adhipa Yoga</title>
@endsection
@section('content')
<section class="gradient-overlay gradient-overlay-dark ">
    <img class="bg-image" src="{{asset('frontend/assets/img/1.jpg')}}" alt="">
    <div class="container hero hero-responsive">
        <div class="row  align-items-center z-index-2 position-relative text-center">
            <div class="col-12">
                <h1 class="display-4  text-white mb-2 heading">Increased Muscle Strength and Tone</h1>
                <p class="font-weight-300 mb-5 sub-heading ">Learn about how yoga can help you stay healthy</p>
                <a href="#rsvp" class="btn btn-secondary   scroll">Make an Appointment</a>
            </div>
        </div>
    </div>
    <div class="curved-decoration ">
        <div class="decoration-bottom bottom-n1">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">

            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"/>
            <path fill="#f3f5f8" opacity="0.3" d="M0,43V18.7c0,0,131.8-13.9,269.2,20.9C407.2,60,600.3-13.9,800,27.8V43H0z"/>
            </svg>
        </div>
    </div>
</section>
<section id="about">
    <div class="container spacer-double-lg border-bottom">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5 mb-5 mb-lg-0 text-center">
                <img class="mb-4 max-width-9" src="{{asset('frontend/assets/svg/logo-pink.svg')}}" alt="">
                <div class="mb-4">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">what we do</span>
                    <h1 class="mb-0">Ho We Are ?</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
                <p class="mb-4">Mountain Pose is the base for all standing poses it gives
                you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like "simply standing," but there is a ton going on.</p>
                <a href="#rsvp" class="btn btn-secondary btn-sm">Make an Appointment</a>
            </div>
            <div class="col-md-6">
                <div class="position-relative" >
                    <div class="w-100 shape-centered-nvh">
                        <figure class="random-shape" >
                            <svg version="1.1" width="100%"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 921.6 655.9"
                            enable-background="new 0 0 921.6 655.9" xml:space="preserve">
                            <path fill="none" stroke="#FF7D7F" stroke-width="15" stroke-miterlimit="10" d="M792.4,64.1c17.4,14.7,33.2,31.2,47.4,49c2.2,2.7,4.3,5.5,6.4,8.3c1.3,1.7,2.5,3.4,3.7,5.1
                            c0.8,1.1,1.6,2.2,2.4,3.3c57.1,82.2,75.8,185.1,51.3,282.1c-4,15.7-9.1,31.2-15.2,46.2c-0.9,2.3-1.9,4.6-2.9,6.8l0,0
                            c-13.5,31-31.6,59.9-53.5,85.7c-3.1,3.7-6.3,7.3-9.5,10.7c-8.7,9.4-18,18.1-27.9,26.3c-121.4,99.7-286.4,58.9-449.2,2.5
                            c-4-1.4-8-2.8-12-4.2c-1-0.3-1.9-0.7-2.9-1C-112,427.2-80,217.8,305.8,103.7C488.6,49.6,647.1-59.3,792.4,64.1z"/>
                            </svg>
                        </figure>
                    </div>
                    <div class="row gap" data-jarallax-element="-60 0">
                        <div class="col-5 align-self-end  mb-2">
                            <img class="img-fluid w-100" src="{{asset('frontend/assets/img/offset/1.jpg')}}" alt="">
                        </div>
                        <div class="col-7  mb-2">
                            <img class="img-fluid w-100" src="{{asset('frontend/assets/img/offset/2.jpg')}}" alt="">
                        </div>
                        <div class="col-5 offset-1  mb-2 mb-lg-0">
                            <img class="img-fluid w-100" src="{{asset('frontend/assets/img/offset/3.jpg')}}" alt="">
                        </div>
                        <div class="col-5 mb-2">
                            <img class="img-fluid w-100" src="{{asset('frontend/assets/img/offset/4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">what we do</span>       
                    <h1 class="mb-0">Our Main Services</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-md-9">
                <div  class="services-steps nav  mx-auto mb-9 " role="tablist">
                    <div class="service-step-item active show" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                        <div class="service-step-icon-container text-muted">
                            <div class="service-step-icon ">
                                <div class="service-step-icon-inner">
                                    <img class=" disabled d-none" src="{{asset('frontend/assets/svg/yoga-pos-1-active.svg')}}" alt="">
                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/yoga-pos-1.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <h5 class="service-step-title mb-4 mb-lg-0 text-muted">Beginer Classes</h5>
                    </div>
                    <div class="service-step-item " data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                        <div class="service-step-icon-container text-muted">
                            <div class="service-step-icon ">
                                <div class="service-step-icon-inner"><img class=" disabled d-none" src="{{asset('frontend/assets/svg/yoga-pos-2-active.svg')}}" alt="">
                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/yoga-pos-2.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <h5 class="service-step-title mb-0 text-muted">Advanced Classes</h5>
                    </div>
                    <div class="service-step-item" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                        <div class="service-step-icon-container text-muted">
                            <div class="service-step-icon ">
                                <div class="service-step-icon-inner"><img class="  disabled d-none" src="{{asset('frontend/assets/svg/yoga-pos-3-active.svg')}}" alt="">
                                    <img class="  d-none enabled" src="{{asset('frontend/assets/svg/yoga-pos-3.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <h5 class="service-step-title mb-0 text-muted">Private Classes</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content mt-5 pt-5">
            <div id="tab-one" class="row align-items-lg-center tab-pane fade active show " role="tabpanel">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/2.jpg')}}" alt="">
                </div>
                <div class="col-md-6 pl-lg-6">
                    <h2 class="text-lh-xs mb-4">The Most Important Yoga Poses <br class="d-none d-lg-inline-block"> for Beginners Classes</h2>
                    <p class="mb-5">Mountain Pose is the base for all standing poses it gives<br class="d-none d-lg-inline-block">  you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like "simply standing," but there is a ton going on.</p>
                    <a class="btn btn-sm btn-secondary mr-2" href="#">View Our Gallery</a>
                    <a class="btn btn-sm btn-primary " href="#">Make an Appointment</a>
                </div>
            </div>
            <div id="tab-two" class="row align-items-lg-center tab-pane fade " role="tabpanel">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/3.jpg')}}" alt="">
                </div>
                <div class="col-md-6 pl-lg-6">
                    <h2 class="text-lh-xs mb-4">Get ready to flow, breathe and sweat it out</h2>
                    <p class="mb-5">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like "simply standing," but there is a ton going on.</p>
                    <a class="btn btn-sm btn-primary mr-2" href="#">Meet Trainers</a>
                    <a class="btn btn-sm btn-secondary" href="#">

                        <section id="contact">
                            <div class="container spacer-double-lg">
                                <div class="row justify-content-lg-between align-items-center">
                                    <div class="col-lg-6  mb-7 mb-lg-0">
                                        <div class="mb-3 pb-3">
                                            <span class="text-uppercase text-secondary font-secondary font-size-12">get in touch</span>       
                                            <h1 class="mb-0">Questions Contact Us</h1>
                                            <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                                            <p class=" mb-0 pt-3 lead ">Mountain Pose is the base for all standing poses it gives
                                                you a sense of how to ground in to your feet and feel the earth
                                                below you.
                                            </p>
                                        </div>
                                        <div class="media align-items-center mb-5">
                                            <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                                                <img class="max-width-1 " src="{{asset('frontend/assets/svg/address.svg')}}" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h4 class="h6 mb-0">Address</h4>
                                                <span class="d-block font-size-14">Central Park New York, USA </span>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mb-5">
                                            <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                                                <img class="max-width-1 " src="{{asset('frontend/assets/svg/email.svg')}}" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h4 class="h6 mb-0">Phone Number</h4>
                                                <span class="d-block font-size-14">(513) 352-3209 </span>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mb-5">
                                            <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                                                <img class="max-width-1 " src="{{asset('frontend/assets/svg/phone.svg')}}" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h4 class="h6 mb-0">Say Hello</h4>
                                                <span class="d-block font-size-14">hello@foxeyoga.com</span>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mb-5">
                                            <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                                                <img class="max-width-1 " src="{{asset('frontend/assets/svg/open.svg')}}" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h4 class="h6 mb-0">We are Open</h4>
                                                <span class="d-block font-size-14">Monday - Saturday <br>10:00 am - 22:00 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mt-5 mt-lg-0">
                                        <ul class="instafeed-list list-inline" id="instafeed">
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-1.jpg')}}" /></a></li>
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-2.jpg')}}" /></a></li>
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-3.jpg')}}" /></a></li>
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-4.jpg')}}" /></a></li>
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-5.jpg')}}" /></a></li>
                                            <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-6.jpg')}}" /></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        Pricing Plans
                    </a>
                </div>
            </div>
            <div id="tab-three" class="row align-items-lg-center tab-pane fade " role="tabpanel">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/4.jpg')}}" alt="">
                </div>
                <div class="col-md-6 pl-lg-6">
                    <h2 class="text-lh-xs mb-4">Private Yoga Classes specially designed for your.</h2>
                    <p class="mb-5">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like "simply standing," but there is a ton going on.</p>
                    <a class="btn btn-sm btn-primary mr-2" href="#">Yoga Poses</a>
                    <a class="btn btn-sm btn-secondary" href="#">
                        View Schedule
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="benefits">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">free your soul</span>       
                    <h1 class="mb-0">Yoga Benefits</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-md-7 mb-5 mb-lg-0">
                <div class="position-relative">
                    <div  class="w-95 shape-centered-ncr">
                        <figure class="random-shape">
                            <svg version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 970.4 617.3"
                            enable-background= "new 0 0 970.4 617.3;" xml:space="preserve">
                            <path fill="none" stroke="#FF7D7F" stroke-width="15" stroke-miterlimit="10"  d="M569.9,75.8c353.7,20.6,677.8,68.1-15.4,459.4c-156.3,88.2-336.8,115.7-459.4-15.4S-20.6,183,110.5,60.4
                            S390.7,65.3,569.9,75.8z"/>
                            </svg>
                        </figure>
                    </div>
                    <div class="row gap mb-9 mb-md-0" data-jarallax-element="-60 0">
                        <div class="col-6 mb-2" >
                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/5.jpg')}}" alt="">
                        </div>
                        <div class="col-4 align-self-end mb-2" >
                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/6.jpg')}}" alt="">
                        </div>
                        <div class="col-10 offset-2" >
                            <img class="img-fluid" src="{{asset('frontend/assets/img/offset/7.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="mr-n w-100">
                    <div class="media align-items-center mb-4 shadow p-1 radius-3 min-height-70" >
                        <span class="p-2 mr-3 ml-3">
                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/apple.svg')}}" alt="">
                        </span>
                        <div class="media-body">
                            <span class="font-secondary font-size-17 text-secondary-2">Increased flexibility.</span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-4 shadow p-1 radius-3 min-height-70" >
                    <span class=" p-2 mr-3 ml-3">
                        <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/lotus.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <span class="font-secondary font-size-17 text-secondary-2">Increased muscle strength</span>
                    </div>
                </div>
                <div class="mr-n w-100">
                    <div class="media align-items-center mb-4 shadow p-1 radius-3 min-height-70" >
                        <span class=" p-2 mr-3 ml-3">
                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/orchid.svg')}}" alt="">
                        </span>
                        <div class="media-body">
                            <span class="font-secondary font-size-17 text-secondary-2">Cardio and circulatory health</span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center mb-4 shadow p-1 radius-3 min-height-70" >
                    <span class=" p-2 mr-3 ml-3">
                        <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/buddha.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <span class="font-secondary font-size-17 text-secondary-2">Increased muscle strength</span>
                    </div>
                </div>
                <div class="mr-n w-100">
                    <div class="media align-items-center shadow p-1 radius-3 min-height-70" >
                        <span class=" p-2 mr-3 ml-3">
                            <img class="img-fluid max-width-2" src="{{asset('frontend/assets/svg/cardiogram.svg')}}" alt="">
                        </span>
                        <div class="media-body">
                            <span class="font-secondary font-size-17 text-secondary-2">Protection from injury</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mt-5 pt-5 text-center"> 
                    <a class="mr-2 btn btn-secondary btn-radius-bottom-left  mb-lg-0" href="#">
                        View Our Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="poses">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">Basic yoga poses</span>       
                    <h1 class="mb-0">Yoga Positions</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item ">
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-6.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Baddha konasana</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item ">
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-7.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Trikonasana </h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item ">
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-8.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Vrksasana</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-9.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Savasana</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-10.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title mb-0">Kursiasana</h5>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4 align-items-center justify-content-center">
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-11.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0"> Bhujangasana</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-12.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Tadasana</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-13.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Sukhasna</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pose-14.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title  mb-0">Sanskrit</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="yoga-pose-item " >
                    <div class="yoga-pose-icon-container text-muted">
                        <div class="yoga-pose-icon ">
                            <div class="yoga-pose-icon-inner">
                                <img class="" src="{{asset('frontend/assets/svg/yoga-pos-2-active.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <h5 class="yoga-pose-title mb-0">Uttanasana</h5>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section id="trainer">
    <div class="container container spacer-double-lg">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">the trainers</span>       
                    <h1 class="mb-0">Our Instructors</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6">
                <div class="row shrink">
                    <div class="col-lg-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-5 mb-lg-0">
                        <h3 class="h5 mb-2">Melissa Wagner</h3>
                        <div class="d-inline-block">
                            <span class="badge badge-pill mb-3 bg-primary">Yoga Trainer</span>
                        </div>
                        <p>Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet.</p>
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-facebook-f btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-google btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-twitter btn-icon-inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img class="img-fluid " src="{{asset('frontend/assets/img/5.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row shrink">
                    <div class="col-lg-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-5 mb-lg-0">
                        <h3 class="h5 mb-2">Jeremy Spivak</h3>
                        <div class="d-inline-block">
                            <span class="badge badge-pill bg-primary mb-3">Yoga Trainer</span>
                        </div>
                        <p>Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet.</p>
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-facebook-f btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-google btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-twitter btn-icon-inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mb-lg-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/6.jpg')}}" alt=" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <div class="col-sm-6">
                <div class="row shrink">
                    <div class="col-lg-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-5 mb-lg-0">
                        <h3 class="h5 mb-2">Renee Mu</h3>
                        <div class="d-inline-block">
                            <span class="badge badge-pill bg-primary mb-3">Yoga Trainer</span>
                        </div>
                        <p>Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet.</p>
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-facebook-f btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-google btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-twitter btn-icon-inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img class="img-fluid  " src="{{asset('frontend/assets/img/7.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row shrink">
                    <div class="col-lg-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-5 mb-lg-0">
                        <h3 class="h5 mb-2">David Taylor</h3>
                        <div class="d-inline-block">
                            <span class="badge badge-pill bg-primary mb-3">Yoga Trainer</span>
                        </div>
                        <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-facebook-f btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-1">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-google btn-icon-inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn btn-social btn-icon btn-social-light" href="#" tabindex="0">
                                    <span class="fab fa-twitter btn-icon-inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 ">
                        <img class="img-fluid " src="{{asset('frontend/assets/img/8.jpg')}}" alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="video-cover"  class="gradient-overlay gradient-overlay-dark video-cover">
    <div class="curved-decoration top-n1 flip-xy">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">

            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>

        </svg>
    </div>
    <img class="bg-image" src="{{asset('frontend/assets/img/9.jpg')}}" alt="">
    <div class="container spacer-xlg z-index-2 position-relative">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6 ">
                <a class="venobox play-but  mt-3" data-vbtype="video" data-overlay="rgba(52,58,64,.6)" href="https://youtu.be/8YDd8Wgjj28">
                    <span class="play-icon play-icon-md">
                        <span class="play-icon-inner">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 158 178.4" enable-background="new 0 0 158 178.4;" xml:space="preserve">
                            <polygon class="st0" points="147.8,89.2 5,169.8 5,8.6 147.8,89.2 "/>
                            </svg>
                        </span>
                    </span>
                </a>
                <h3 class="h5 text-white mt-3 mb-0">Yoga training for Everybody</h3>
                <span class="font-size-14 text-B42997">Play course</span>
            </div>
        </div>
    </div>
    <div class="curved-decoration bottom-n1">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 43.2" enable-background="new 0 0 800 43.2;" xml:space="preserve">

            <path fill="#f3f5f8" d="M0,43.1v-4.8c0,0,187.9-30,400-3S800,0,800,0v43.1H0z"></path>

        </svg>
    </div>
</section>
<section id="schedule">
    <div class="container spacer-double-lg">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase font-secondary font-size-12 text-503592">choose program</span>       
                    <h1 class="mb-0 text-D9008F">Yoga Positions</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 clearfix mb-5 mb-lg-0">
                <div class="p-6 p-3 shadow radius-2">
                    <h6 class="h5 text-B42997 mb-5 text-center">2020 Schedule</h6>
                    <table class="table table-borderless">
                        <thead class="text-center">
                            <tr>
                                <th class=" text-secondary  font-size-14 text-uppercase">Time</th>
                                <th class="border-left  text-dark font-size-14 text-uppercase">
                                    Mon
                                </th>
                                <th class=" border-left border-right text-dark  font-size-14 text-uppercase">
                                    Tue
                                </th>
                                <th class=" text-dark  font-size-14 text-uppercase" >
                                    wed
                                </th>
                                <th class="border-left  text-dark  font-size-14 text-uppercase">
                                    Thur
                                </th>
                                <th class=" border-left border-right text-dark font-size-14 text-uppercase">
                                    Fri
                                </th>
                                <th class=" text-dark font-size-14 text-uppercase" >
                                    Sat
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="font-size-13 text-dark text-center">8:30 <br>am</th>
                                <td class="text-center   border-left">
                                    Beginner<br>
                                    Group A
                                </td>
                                <td class="text-center  border-left border-right ">
                                    -
                                </td>
                                <td class="text-center   border-left">
                                    Beginner<br>
                                    Group A
                                </td>
                                <td class="text-center  border-left border-right ">
                                    -
                                </td>
                                <td class="text-center  border-left border-right ">
                                    -
                                </td>
                                <td class=" text-center  ">
                                    Beginner<br>
                                    Group B
                                </td>
                            </tr>
                            <tr>
                                <th class="font-size-13 text-dark text-center">10:00 <br>am</th>
                                <td class="text-center   border-left">-</td>
                                <td class="text-center  border-left border-right p-3">
                                    Advanced<br>
                                    Group A
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class=" text-center  ">
                                    -
                                </td>
                            </tr>
                            <tr>
                                <th class="font-size-13 text-dark  text-center">12:30 <br>pm</th>
                                <td class="text-center   border-left">Advanced<br>
                                    Group B
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class="text-center  border-left border-right py-3 px-4">Advanced<br>
                                    Group c
                                </td>
                                <td class=" text-center ">
                                    -
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mt-5 pt-5 text-center"> 
                    <a class="mr-2 btn btn-secondary btn-radius-bottom-left  mb-lg-0" href="#">
                        Make an Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="stats" class="bg-stats spacer-double-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="media align-items-center">
                    <span class="p-2 mr-4">
                        <img class="max-width-3" src="{{asset('frontend/assets/svg/Icon simple-sentiayoga.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h2 class="text-white">560</h2>
                        <h6 class="mb-0 text-white">Happy Customers</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="media align-items-center">
                    <span class="p-2 mr-4">
                        <img class="max-width-3" src="{{asset('frontend/assets/svg/Icon simple-sentiayoga.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h2 class="text-white">30</h2>
                        <h6 class="mb-0 text-white">Experienced Trainer</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="media align-items-center">
                    <span class="p-2 mr-4">
                        <img class="max-width-3" src="{{asset('frontend/assets/svg/Icon simple-sentiayoga.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h2 class="text-white">20</h2>
                        <h6 class="mb-0 text-white">Years of Experience</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <div class="media align-items-center">
                    <span class="p-2 mr-4">
                        <img class="max-width-3" src="{{asset('frontend/assets/svg/Icon simple-sentiayoga.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h2 class="text-white">40</h2>
                        <h6 class="mb-0 text-white">Classes of Yoga</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="appointment" class=" bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class=" d-md-none img-mobile" src="{{asset('frontend/assets/img/10.jpg')}}" alt="">
                <div class="position-relative h-100 vw-50 float-right  d-none d-md-block">
                    <div class="w-100 h-100 ">
                        <img class="bg-image" src="{{asset('frontend/assets/img/10.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 spacer-double-lg">
                <div class="mb-3 pb-3">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">choose program</span>       
                    <h1 class="mb-0">Make an Appointment</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
                <form action="#">
                    <div class="d-flex flex-column  form-group">
                        <input class="form-control mb-3 h-100" name="Name" placeholder="Name" type="text">
                        <input class="form-control mb-3 h-100" name="email" placeholder="Email" type="email">
                        <textarea class="form-control mb-3 resize-n" rows="6" name="description" placeholder="Type your message ..."></textarea>
                        <button class="btn w-50 btn-primary" type="submit">
                            <span class="mn-top">Get a free account</span>
                        </button>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="consultantNewsletters" name="consultantNewsletters">
                        <label class="custom-control-label" for="consultantNewsletters">
                            <span class="font-size-14 text-muted">
                                Receive Newsletters from foxecoach.
                            </span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- <section id="testtimonials">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">Testimonials</span>       
                    <h1 class="mb-0">What They Say</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row  align-items-center">
            <div class="testimonial-carousel">
                <div class="px-3  w-100 pt-5">
                    <div class="card border-0    bg-light">
                        <div class="card-body pr-5 pl-5 p5-3 pt-0 shadow radius-2">
                            <div class="testimonial-image">
                                <div class="testimonial-image-border">
                                    <img class="rounded-circle" src="{{asset('frontend/assets/img/5.jpg')}}" alt="/">
                                </div>
                            </div>
                            <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                                you a sense of how to ground in to your feet and feel the earth
                                below you."
                            </p>
                        </div>
                        <div class="card-footer border-0  pt-0 px-5 pb-0 mt-3">
                            <span class="h6 font-base font-weight-600 mb-0">Jeremy Spivak</span>
                            <small class="d-block text-muted">Business Manager</small>
                        </div>
                    </div>
                </div>
                <div class="px-3  w-100 pt-5">
                    <div class="card border-0  bg-light">
                        <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                            <div class="testimonial-image">
                                <div class="testimonial-image-border">
                                    <img class="rounded-circle" src="{{asset('frontend/assets/img/6.jpg')}}" alt="/">
                                </div>
                            </div>
                            <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                                you a sense of how to ground in to your feet and feel the earth
                                below you."
                            </p>
                        </div>
                        <div class="card-footer border-0  pt-0 px-5 pb-0  mt-3">
                            <span class="h6 font-base font-weight-600 mb-0">Melissa Wagner</span>
                            <small class="d-block text-muted">Business Manager</small>
                        </div>
                    </div>
                </div>
                <div class="px-3  w-100 pt-5 ">
                    <div class="card border-0   bg-light">
                        <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                            <div class="testimonial-image">
                                <div class="testimonial-image-border">
                                    <img class="rounded-circle" src="{{asset('frontend/assets/img/7.jpg')}}" alt="/">
                                </div>
                            </div>
                            <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                                you a sense of how to ground in to your feet and feel the earth
                                below you."
                            </p>
                        </div>
                        <div class="card-footer border-0  pt-0 px-5 pb-0 mt-3">
                            <span class="h6 font-base font-weight-600 mb-0">Stacy Taylor</span>
                            <small class="d-block text-muted">Business Manager</small>
                        </div>
                    </div>
                </div>
                <div class="px-3 w-100 pt-5 pb-5">
                    <div class="card border-0   bg-light">
                        <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                            <div class="testimonial-image">
                                <div class="testimonial-image-border">
                                    <img class="rounded-circle" src="{{asset('frontend/assets/img/8.jpg')}}" alt="/">
                                </div>
                            </div>
                            <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                                you a sense of how to ground in to your feet and feel the earth
                                below you."
                            </p>
                        </div>
                        <div class="card-footer border-0  pt-0 px-5 pb-0  mt-3">
                            <span class="h6 font-base font-weight-600 mb-0">Renee Mu</span>
                            <small class="d-block text-muted">Business Manager</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="pricing">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-503592 font-secondary font-size-12">Choose a plan</span>       
                    <h1 class="mb-0 text-D9008F">Pricing Plans</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">Mountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may seem like “simply standing,” but there is a ton going on
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-0 bg-light shadow radius-2 text-center pt-6 pb-3">
                    <header class="card-header border-0 p-0 ">
                        <div class="table-price">
                            <div class="table-price-border">
                                <h3 class="mb-1 h4 ">Beginner</h3>
                                <span class="h1 d-block font-base font-weight-600 mb-0">$90</span>
                                <span class="font-size-14 font-secondary">Price per weeek</span>
                            </div>
                        </div>
                    </header>
                    <div class="card-body">
                        <ul class="list-group list-group-flush  mb-4">
                            <li class="list-group-item">
                                <h6 class="text-muted">Increased Flexibility.</h6>
                            </li>
                            <li class="list-group-item">
                                <h6 class="text-muted">Cardio and Circulatory Health </h6>
                            </li>
                            <li class="list-group-item  py-2">
                                <h6 class="text-muted">Protection from Injury. </h6>
                            </li>
                        </ul>
                        <button type="button" class="btn   btn-secondary ">By It Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4  mb-5 mb-lg-0">
                <div class="card border-0 bg-light shadow radius-2 text-center pt-6 pb-3">
                    <header class="card-header border-0 p-0 ">
                        <div class="table-price">
                            <div class="table-price-border">
                                <h3 class="mb-1 h4 ">Advanced</h3>
                                <span class="h1 d-block font-base font-weight-600 mb-0 text-secondary">$290</span>
                                <span class="font-size-14 font-secondary">Price per weeek</span>
                            </div>
                        </div>
                    </header>
                    <div class="card-body">
                        <ul class="list-group list-group-flush  mb-4">
                            <li class="list-group-item">
                                <h6 class="text-muted">Increased Flexibility.</h6>
                            </li>
                            <li class="list-group-item">
                                <h6 class="text-muted">Cardio and Circulatory Health </h6>
                            </li>
                            <li class="list-group-item  py-2">
                                <h6 class="text-muted">Protection from Injury. </h6>
                            </li>
                        </ul>
                        <button type="button" class="btn   btn-primary ">By It Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-0 bg-light shadow radius-2 text-center pt-6 pb-3">
                    <header class="card-header border-0 p-0 ">
                        <div class="table-price">
                            <div class="table-price-border">
                                <h3 class="mb-1 h4">Private</h3>
                                <span class="h1 d-block font-base font-weight-600 mb-0">$490</span>
                                <span class="font-size-14 font-secondary">Price per weeek</span>
                            </div>
                        </div>
                    </header>
                    <div class="card-body">
                        <ul class="list-group list-group-flush  mb-4">
                            <li class="list-group-item">
                                <h6 class="text-muted">Increased Flexibility.</h6>
                            </li>
                            <li class="list-group-item">
                                <h6 class="text-muted">Cardio and Circulatory Health </h6>
                            </li>
                            <li class="list-group-item  py-2">
                                <h6 class="text-muted">Protection from Injury. </h6>
                            </li>
                        </ul>
                        <button type="button" class="btn   btn-secondary ">By It Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-auto">
                <div class="alert bg-light shadow mb-0 text-center radius-2">
                    <p class="mb-0 small"><span class="mn-top">* Plan pricing may changes read our <a href="#" class="text-secondary">Terms</a> for more info.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-503592 font-secondary font-size-12">best moments</span>       
                    <h1 class="mb-0 text-D9008F">Yoga Gallery</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">MMountain Pose is the base for all standing poses it gives you a sense of how to ground in to your feet and feel the earth below you. Mountain pose may
                    </p>
                </div>
            </div>
        </div>
        <div class="row gap">
            <div class="col-md-3 col-md  mb-2">
                <a class="venobox hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/11.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon ">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-1">
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-md mb-2">
                <a class="venobox hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/14.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon ">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-2"></div>
                </a>
            </div>
            <div class="col-md-3 d-none d-md-block mb-2">
                <a class="venobox hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/13.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon ">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-3"></div>
                </a>
            </div>
            <div class="col-md-3 col-md mb-2 mb-md-0">
                <a class="venobox hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/12.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-4"></div>
                </a>
            </div>
            <div class="col-md-3 mb-2 mb-md-0">
                <a class="venobox  hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/15.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-5"></div>
                </a>
            </div>
            <div class="col-md-6 col-md">
                <a class="venobox  hover-effect d-block vbox-item" data-overlay="rgba(52,58,64,.6)" href="assets/img/16.jpg')}}">
                    <span class="hover-effect-container">
                        <span class="hover-effect-icon">
                            <span class=" fas fa-eye top-icon "></span>
                        </span>
                    </span>
                    <div class="gall gall-bg-img gall-6"></div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="news">
    <div class="container spacer-double-lg border-bottom">
        <div class="row">
            <div class="col">
                <div class="mb-5 pb-5 text-center">
                    <span class="text-uppercase text-503592 font-secondary font-size-12">from the blog</span>       
                    <h1 class="mb-0 text-D9008F">Latest Posts &amp; Articles</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                    <p class=" mb-0 pt-3 lead w-md-60 mx-auto">Mountain Pose is the base for all standing poses it gives
                        you a sense of how to ground in to your feet and feel the earth
                        below you.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <article class="card shadow radius-2  bg-light border-0 h-100 pt-3">
                    <div class="p-5">
                        <div class="post-img position-relative">
                            <div class="post-img-border">
                                <img class="card-img-top" src="{{asset('frontend/assets/img/17.jpg')}}" alt=""> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="small d-flex">
                                <div class="mr-2">
                                    <a href="#">Ton</a>
                                </div>
                                <span class="text-muted ">20th March</span>
                            </div>
                            <span class="badge bg-primary text-white font-base">
                                <svg version="1.1" class="badge-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52 45.9" xml:space="preserve">
                                    <path d="M51.9,14.4C51.2,6.1,45.2,0,37.8,0c-4.9,0-9.4,2.7-12,6.9C23.3,2.6,19,0,14.2,0C6.8,0,0.8,6.1,0.1,14.4
                                    c-0.1,0.4-0.3,2.3,0.4,5.5c1.1,4.6,3.6,8.7,7.2,12l18.3,14l18.3-14c3.6-3.3,6.1-7.4,7.2-12C52.2,16.7,52,14.8,51.9,14.4z" fill="#ffffff"></path>
                                </svg>
                                13
                            </span>
                        </div>
                        <h2 class="h5 ">
                            <a href="#">Cardio and circulatory health</a>
                        </h2>
                        <p>Mountain Pose is the base for all standing poses it gives
                        you a sense of how to ground in to your feet. </p>
                    </div>
                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <img class="avatar-xs rounded-circle mr-2" src="{{asset('frontend/assets/img/7.jpg')}}" alt="">
                            <div class="media-body">
                                <span class="font-size-13 text-muted">By</span>
                                <a class="font-size-13 text-dark" href="#">Jena Young</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 ">
                <article class="card shadow radius-2 bg-light border-0 h-100 pt-3">
                    <div class="p-5">
                        <div class="post-img position-relative">
                            <div class="post-img-border">
                                <img class="card-img-top" src="{{asset('frontend/assets/img/18.jpg')}}" alt=""> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="small d-flex">
                                <div class="mr-2">
                                    <a href="#">Strenght</a>
                                </div>
                                <span class="text-muted ">10th March</span>
                            </div>
                            <span class="badge bg-primary text-white font-base">
                                <svg version="1.1" class="badge-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52 45.9" xml:space="preserve">
                                    <path d="M51.9,14.4C51.2,6.1,45.2,0,37.8,0c-4.9,0-9.4,2.7-12,6.9C23.3,2.6,19,0,14.2,0C6.8,0,0.8,6.1,0.1,14.4
                                    c-0.1,0.4-0.3,2.3,0.4,5.5c1.1,4.6,3.6,8.7,7.2,12l18.3,14l18.3-14c3.6-3.3,6.1-7.4,7.2-12C52.2,16.7,52,14.8,51.9,14.4z" fill="#ffffff"></path>
                                </svg>
                                14
                            </span>
                        </div>
                        <h3 class="h5 ">
                            <a href="#">Protection from injury </a>
                        </h3>
                        <p>Mountain Pose is the base for all standing poses it gives
                        you a sense of how to ground in to your feet. </p>
                    </div>
                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <img class="avatar-xs rounded-circle mr-2" src="{{asset('frontend/assets/img/6.jpg')}}" alt="">
                            <div class="media-body">
                                <span class="font-size-13 text-muted">By</span>
                                <a class="font-size-13 text-dark" href="#">Zak Watson</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="card radius-2 shadow bg-light border-0 h-100 pt-3">
                    <div class="p-5">
                        <div class="post-img position-relative">
                            <div class="post-img-border">
                                <img class="card-img-top" src="{{asset('frontend/assets/img/19.jpg')}}" alt=""> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="small d-flex">
                                <div class="mr-2">
                                    <a href="#">Yoga</a>
                                </div>
                                <span class="text-muted ">14th March</span>
                            </div>
                            <span class="badge bg-primary text-white font-base">
                                <svg version="1.1" class="badge-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52 45.9" xml:space="preserve">
                                    <path d="M51.9,14.4C51.2,6.1,45.2,0,37.8,0c-4.9,0-9.4,2.7-12,6.9C23.3,2.6,19,0,14.2,0C6.8,0,0.8,6.1,0.1,14.4
                                    c-0.1,0.4-0.3,2.3,0.4,5.5c1.1,4.6,3.6,8.7,7.2,12l18.3,14l18.3-14c3.6-3.3,6.1-7.4,7.2-12C52.2,16.7,52,14.8,51.9,14.4z" fill="#ffffff"></path>
                                </svg>
                                11
                            </span>
                        </div>
                        <h3 class="h5 ">
                            <a href="#">Increased muscle strength</a>
                        </h3>
                        <p>Mountain Pose is the base for all standing poses it gives
                        you a sense of how to ground in to your feet. </p>
                    </div>
                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <img class="avatar-xs rounded-circle mr-2" src="{{asset('frontend/assets/img/5.jpg')}}" alt="">
                            <div class="media-body">
                                <span class="font-size-13 text-muted">By</span>
                                <a class="font-size-13 text-dark" href="#">Josef Millas</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mt-5 pt-5 text-center"> 
                    <a class="mr-2 btn btn-primary btn-radius-bottom-left  mb-lg-0" href="#">
                        View All Blog Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container spacer-double-lg">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-lg-6  mb-7 mb-lg-0">
                <div class="mb-3 pb-3">
                    <span class="text-uppercase text-secondary font-secondary font-size-12">get in touch</span>       
                    <h1 class="mb-0">Questions Contact Us</h1>
                    <img class=" max-width-4" src="{{asset('frontend/assets/svg/title-line.svg')}}" alt="">
                    <p class=" mb-0 pt-3 lead ">Mountain Pose is the base for all standing poses it gives
                        you a sense of how to ground in to your feet and feel the earth
                        below you.
                    </p>
                </div>
                <div class="media align-items-center mb-5">
                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/address.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h4 class="h6 mb-0">Address</h4>
                        <span class="d-block font-size-14">Central Park New York, USA </span>
                    </div>
                </div>
                <div class="media align-items-center mb-5">
                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/email.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h4 class="h6 mb-0">Phone Number</h4>
                        <span class="d-block font-size-14">(513) 352-3209 </span>
                    </div>
                </div>
                <div class="media align-items-center mb-5">
                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/phone.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h4 class="h6 mb-0">Say Hello</h4>
                        <span class="d-block font-size-14">hello@foxeyoga.com</span>
                    </div>
                </div>
                <div class="media align-items-center mb-5">
                    <span class="contact-icon shadow-inner rounded-circle p-2 mr-3">
                        <img class="max-width-1 " src="{{asset('frontend/assets/svg/open.svg')}}" alt="">
                    </span>
                    <div class="media-body">
                        <h4 class="h6 mb-0">We are Open</h4>
                        <span class="d-block font-size-14">Monday - Saturday <br>10:00 am - 22:00 pm</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <ul class="instafeed-list list-inline" id="instafeed">
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-1.jpg')}}" /></a></li>
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-2.jpg')}}" /></a></li>
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-3.jpg')}}" /></a></li>
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-4.jpg')}}" /></a></li>
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-5.jpg')}}" /></a></li>
                    <li><a class="hover-effect" target="_blank" href="https://www.instagram.com/oumaila9/"><span class="hover-effect-container"><span class="hover-effect-icon hover-effect-icon-small"><span class="fa fa-eye hover-effect-icon-inner"></span></span></span></span><img class=" mw-100 " src="{{asset('frontend/assets/img/600x600-6.jpg')}}" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')

@endpush
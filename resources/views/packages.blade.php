@extends('layouts.frontend.app')
@section('head')
<title>Welcome to Tegdar</title>
@endsection
@section('content')
  
<!-- banner -->
<div class="innerpage-banner">
  <div class="inner-page-layer">
  </div>
</div>
<!-- //banner -->

<!-- Services -->
<section class="trainers py-5">
  <div class="container py-md-3">
    <h4 class="heading text-center">Health Center</h4>
    <h2 class="heading text-center mb-sm-5 mb-4">Services </h2>
    <div class="row service-grids">
      <div class="row col-lg-6 mb-5">
        <div class="col-sm-3 ser_icon">
          <i class="fas bg1 fa-heartbeat"></i>
        </div>
        <div class="col-sm-9 mt-sm-0 mt-3">
          <h4>Health Fitness</h4>
          <p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felis tincidunt finibus.
          Nulla sed justo tellus. Donec felis ante ipsum urna Quisque sed felis.</p>
        </div>
      </div>
      <div class="row col-lg-6 mb-sm-5 text-right">
        <div class="col-sm-9">
          <h4>Nutrition Strategy</h4>
          <p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felis tincidunt finibus.
          Nulla sed justo tellus. Donec felis ante ipsum urna Quisque sed felis.</p>
        </div>
        <div class="col-sm-3 mt-sm-0 mt-4 ser_icon ser-right">
          <i class="fas bg2 fa-anchor"></i>
        </div>
      </div>
      <div class="row col-lg-6 mb-lg-0 mb-5">
        <div class="col-sm-3 mb-sm-0 mb-4 ser_icon">
          <i class="fas bg3 fa-bullseye"></i>
        </div>
        <div class="col-sm-9">
          <h4>Workout Routein</h4>
          <p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felis tincidunt finibus.
          Nulla sed justo tellus. Donec felis ante ipsum urna Quisque sed felis.</p>
        </div>
      </div>
      <div class="row col-lg-6 text-right">
        <div class="col-sm-9">
          <h4>Yoga Fitness</h4>
          <p class="">Quisque ac sapien quis orci pulvinar finibus quisn eu urna Quisque Suspendisse id felisut sed felis tincidunt finibus.
          Nulla sed justo tellus. Donec felis ante ipsum urna Quisque sed felis.</p>
        </div>
        <div class="col-sm-3 mt-sm-0 mt-4 ser_icon ser-right">
          <i class="fab bg4 fa-docker"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //Services -->

<!-- banner-bottom-wthree -->
<section class="banner-bottom-wthree py-5">
  <div class="container-fluid">
    <h4 class="heading text-center">Health Center</h4>
    <h3 class="heading text-center mb-5">Daily Workout </h3>
    <div class="inner-sec-w3ls">
      <div class="row populor_category_grids mt-5 pr-3">
        <div class="col-lg-2 col-md-4 col-sm-6 category_grid">
          <div class="view view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/crossfit.png')}}" class="img-fluid" alt="" />
              <h3>Monday</h3>
              <p>Interval Training</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mt-sm-0 mt-3 category_grid">
          <div class="view view1 view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/exercise.png')}}" class="img-fluid" alt="" />
              <h3>Tuesday</h3>
              <p>Flexibility Training</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 mt-md-0 mt-3 category_grid">
          <div class="view view2 view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/lift.png')}}" class="img-fluid" alt="" />
              <h3>Wednesday </h3>
              <p>Cardio Training</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-3 category_grid">
          <div class="view view3 view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/weight.png')}}" class="img-fluid" alt="" />
              <h3>Thursday</h3>
              <p>Strength Training</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-3 category_grid">
          <div class="view view4 view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/running.png')}}" class="img-fluid" alt="" />
              <h3>Friday </h3>
              <p>Resistance Training</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-3 category_grid">
          <div class="view view5 view-tenth">
            <div class="category_text_box">
              <img src="{{asset('frontend/images/yoga.png')}}" class="img-fluid" alt="" />
              <h3>Saturday</h3>
              <p> Crossfit Training</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- //banner-bottom-wthree -->

<!-- join -->
<section class="join py-5">
  <div class="container">
    <div class="row join_grids">
      <div class="col-lg-6">
        <img src="{{asset('frontend/images/join.jpg')}}" class="img-fluid" alt="" />
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5">
        <h4>join Us Today</h4>
        <p class="py-sm-4 py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien 
        quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam
        dui mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis luctus lectus.</p>
        <a class="btn btn-banner text-capitalize" href="#services" role="button">Join Now</a>
      </div>
    </div>
  </div>
</section>
<!-- //join -->

<!-- social icons -->
<section class="social py-lg-5 mb-lg-0 mb-sm-5 mb-4">
  <div class="container">
    <div class="social-icon footer text-center">
      <h4>Socialize with us</h4>
      <div class="icon-social mt-4">
        <a href="#" class="button-footr">
          <i class="fab mx-2 fa-facebook-f"></i>
        </a>
        <a href="#" class="button-footr">
          <i class="fab mx-2 fa-twitter"></i>
        </a>
        <a href="#" class="button-footr">
          <i class="fab mx-2 fa-dribbble"></i>
        </a>
        <a href="#" class="button-footr">
          <i class="fab mx-2 fa-pinterest-p"></i>
        </a>
        <a href="#" class="button-footr">
          <i class="fab mx-2 fa-google-plus-g"></i>
        </a>

      </div>
    </div>
  </div>
</section>
<!-- //social icons -->
@endsection
@push('scripts')

@endpush
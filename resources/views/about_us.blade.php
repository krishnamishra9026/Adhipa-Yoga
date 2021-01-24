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

<!-- about -->
<section class="about py-5">
  <div class="container py-md-3">
    <h4 class="heading text-center">Health Center</h4>
    <h2 class="heading text-center mb-sm-5 mb-4">About Us </h2>
    <p class="text-center">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo tellus. Donec ut felis ante. Quisque ac sapien 
      quis orci pulvinar finibus quis eu urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam
      dui mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis luctus lectus.
      Morbi at dui nisl.</p>
    <div class="about-grids mt-md-5 mt-4 text-center">
      <h4 class="bg-green"><i class="fas fa-anchor"></i> <span>Training</span></h4>
      <h4 class="bg-blue"><i class="fab fa-nutritionix"></i> <span>Nutrition</span></h4>
      <h4 class="bg-pink"><i class="fab fa-apple"></i> <span>Diet Plan</span></h4>
      <h4 class="bg-green-light"><i class="far fa-thumbs-up"></i> <span>Success</span></h4>
    </div>
  </div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="about-bottom pb-5">
  <div class="container pb-md-3">
    <div class="row bottom-grids">
      <div class="col-lg-6">
        <img src="{{asset('frontend/images/about.jpg')}}" class="img-fluid" alt="" />
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5">
        <h4>Start Health Get Fit In Less Than 2 Weeks</h4>
        <p class="py-3">Suspendisse id felis sed felis tincidunt finibus. Nulla sed in justo inter tellus. Donec ut felis ante. Quisque acin sapien 
        quis orci pulvinar finibus quis urna. onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac quis eu urna Quisque quis eu urna lorem elit.</p>
        <p class="">Quisque ac sapien quis orci pulvinar finibus quis eu urna Quisque Suspendisse id felis sed felis tincidunt finibus.
        Nulla sed justo tellus. Donec ut felis ante ipsum.</p>
      </div>
    </div>
  </div>
</section>
<!-- //about bottom -->

<!-- Trainers -->
<section class="trainers py-5">
  <div class="container py-md-3">
    <h4 class="heading text-center">Health Center</h4>
    <h3 class="heading text-center mb-5">Our Coaches </h3>
     <div class="row team_grids mt-5">
      <div class="col-lg-3 col-sm-6">
        <div class="team-member">
          <div class="team-img">
            <img src="{{asset('frontend/images/t1.jpg')}}" alt="team member" class="img-fluid">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4>pulvinar quis!</h4>
              <p>estibulum ac diam sit amet quam vehicula elementum.</p>
            </div>
            <div class="s-link">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="team-title">
          <h5>Charlotte Olivia</h5>
          <span>Personal Trainer</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 my-sm-0 mt-5">
        <div class="team-member">
          <div class="team-img">
            <img src="{{asset('frontend/images/t2.jpg')}}" alt="team member" class="img-fluid">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4>pulvinar quis!</h4>
              <p>estibulum ac diam sit amet quam vehicula elementum.</p>
            </div>
            <div class="s-link">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="team-title">
          <h5>Mathew Elijah</h5>
          <span>Crossfit Instructor</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mx-auto my-lg-0 mt-5">
        <div class="team-member">
          <div class="team-img">
            <img src="{{asset('frontend/images/t3.jpg')}}" alt="team member" class="img-fluid">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4>pulvinar quis!</h4>
              <p>estibulum ac diam sit amet quam vehicula elementum.</p>
            </div>
            <div class="s-link">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="team-title">
          <h5>Alexander Lucas</h5>
          <span>Yoga Trainer</span>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mx-auto my-lg-0 mt-5">
        <div class="team-member">
          <div class="team-img">
            <img src="{{asset('frontend/images/t4.jpg')}}" alt="team member" class="img-fluid">
          </div>
          <div class="team-hover">
            <div class="desk">
              <h4>pulvinar quis!</h4>
              <p>estibulum ac diam sit amet quam vehicula elementum.</p>
            </div>
            <div class="s-link">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="team-title">
          <h5>Linda Anderson</h5>
          <span>Personal Trainer</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //Trainers -->

<!-- create -->
<section class="create text-center">
  <div class="extra_layer py-5">
    <div class="container py-lg-5 py-3">
      <h4>Lets Create Something Together</h4>
      <p class="py-4">Suspendisse id felis sed felis tincidunt finibus. Nulla sed justo inter tellus. Donec ut felis ante. Quisque acin sapien 
      quis orci pulvinar finibus quis urna. onec consequat sapien ut leo cursus rhoncus.</p>
      <a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="contact.html" role="button"> Get Started</a>
    </div>
  </div>
</section>
<!-- //create -->

<!-- social icons -->
<section class="social py-lg-5 my-lg-0 my-sm-5 my-4">
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
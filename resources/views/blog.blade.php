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

<!-- blog -->
<section class="blog py-5">
  <div class="container py-md-3">
    <h4 class="heading text-center">Health Center</h4>
    <h2 class="heading text-center mb-sm-5 mb-4">Fitness blog </h2>
    <div class="row blog-grids head">
      <div class="col-lg-7 mb-lg-5 blog-img1">
        <img src="{{asset('frontend/images/blog1.jpg')}}" alt="" class="img-fluid"/>
        <a href="/single">Blog #1</a>
      </div>
      <div class="col-lg-5 mb-5">
        <h5>August 27, 2018.</h5>
        <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
        <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
         Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
        <a href="/single" class="btn-banner"> View Post </a>
      </div>
      <div class="col-lg-5 mb-lg-5 mb-4">
        <h5>August 27, 2018.</h5>
        <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
        <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
         Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
        <a href="/single" class="btn-banner"> View Post </a>
      </div>
      <div class="col-lg-7 mb-5 blog-img2">
        <img src="{{asset('frontend/images/blog2.jpg')}}" alt="" class="img-fluid"/>
        <a href="/single">Blog #2</a>
      </div>
      <div class="col-lg-7 mb-lg-5 blog-img1">
        <img src="{{asset('frontend/images/s.jpg')}}" alt="" class="img-fluid"/>
        <a href="/single">Blog #3</a>
      </div>
      <div class="col-lg-5 mb-5">
        <h5>August 27, 2018.</h5>
        <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
        <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
         Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
        <a href="/single" class="btn-banner"> View Post </a>
      </div>
      <div class="col-lg-5 mb-lg-5 mb-4">
        <h5>August 27, 2018.</h5>
        <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
        <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
         Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
        <a href="/single" class="btn-banner"> View Post </a>
      </div>
      <div class="col-lg-7 blog-img2">
        <img src="{{asset('frontend/images/blog4.jpg')}}" alt="" class="img-fluid"/>
        <a href="/single">Blog #4</a>
      </div>
    </div>
  </div>
</section>
<!-- //blog -->

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
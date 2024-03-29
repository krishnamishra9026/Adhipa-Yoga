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

 <section class="mail pt-5">
  <div class="container pt-sm-5 pt-2">
    <h4 class="heading text-center">Health Center</h4>
    <h2 class="heading text-center mb-sm-5 mb-4">Contact Us </h2>
    <div class="row agileinfo_mail_grids">
      <div class="col-lg-8 agileinfo_mail_grid_right">
        <form action="#" method="post">
          <div class="row">
            <div class="col-md-6 wthree_contact_left_grid pr-md-0">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
              </div>
            </div>
            <div class="col-md-6 wthree_contact_left_grid">
              <div class="form-group">
                <input type="text" name="phone number" class="form-control" placeholder="Phone Number" required="">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Message" class="form-control" required=""></textarea>
          </div>
          <div class="submit-buttons">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-img">
        <img src="{{asset('frontend/images/contact.png')}}" class="img-fluid" alt="" />
      </div>
    </div>
  <div class="map mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666"
      style="border:0"></iframe>
  </div>
  </div>
</section>
<!-- //contact -->

<!-- social icons -->
<section class="social py-lg-5 py-4">
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
@endsection
@push('scripts')

@endpush
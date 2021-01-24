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

<!-- single -->
<section class="bottom-banner-w3layouts py-5">
  <div class="container py-md-3">
    <h4 class="heading text-center">Health Center</h4>
    <h2 class="heading text-center mb-sm-5 mb-4">Single Page </h2>
    <div class="row inner-sec-w3ls-agileinfo">
      <!--left-->
      <div class="col-lg-8 left-blog-info text-left">
          <div class="card">
            <a href="single.html">
              <img src="{{asset('frontend/images/blog4.jpg')}}" class="card-img-top img-fluid rounded" alt="">
            </a>
            <div class="card-body">
              <ul class="blog-icons my-4">
                <li>
                  <a href="#">
                    <i class="far fa-calendar-alt"></i> Aug 27 .2018</a>
                </li>
                <li class="mx-2">
                  <a href="#">
                    <i class="far fa-comment"></i> 21</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-eye"></i> 2000</a>
                </li>

              </ul>
              <h5 class="card-title ">
                <a href="single.html">Blog Post Title</a>
              </h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt,Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender.. </p>
              <div class="read inner mt-4">
                <a href="single.html" class="btn btn-sm animated-button victoria-two">Read More</a>
              </div>

            </div>
          </div>
          <div class="comment-top">
            <h4>Comments</h4>
            <div class="media">
              <img src="{{asset('frontend/images/c1.jpg')}}" alt="" class="img-fluid rounded">
              <div class="media-body">
                <h5 class="mt-sm-0 mt-3">Joseph Goh</h5>
                <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
                  Cras a ornare elit.</p>

              </div>
            </div>
            <div class="media">
              <img src="{{asset('frontend/images/c2.jpg')}}" alt="" class="img-fluid rounded">
              <div class="media-body">
                <h5 class="mt-sm-0 mt-3">Richard Spark</h5>
                <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
                  Cras a ornare elit.</p>
              </div>
            </div>
          </div>
          <div class="comment-top">
            <h4>Leave a Comment</h4>
            <div class="comment-bottom">
              <form action="#" method="post">
                <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">

                <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
                <button type="submit" class="btn btn-primary submit">Submit</button>
              </form>
            </div>
          </div>

      </div>
      <!--//left-->
      <!--right-->
      <aside class="col-lg-4 right-blog-con text-left">
        <div class="right-blog-info text-left">
          <div class="tech-btm">
            <img src="{{asset('frontend/images/blog2.jpg')}}" class="card-img-top img-fluid rounded" alt="">
          </div>
          <div class="tech-btm">
            <h4>Sign up to our newsletter</h4>
            <p>Pellentesque dui, non felis. Maecenas male </p>
            <form action="#" method="post">
              <input class="form-control" type="email" placeholder="Email" required="">
              <input class="form-control" type="submit" value="Subscribe">
            </form>

          </div>
          <div class="tech-btm">
            <h4>Categories</h4>
            <ul class="list-group single">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1</span>
              </li>
            </ul>
          </div>
          <div class="tech-btm">
            <h4>Top stories of the week</h4>

            <div class="blog-grids row mb-3">
              <div class="col-md-5 blog-grid-left">
                <a href="single.html">
                  <img src="{{asset('frontend/images/training.jpg')}}" class="card-img-top img-fluid rounded" alt="">
                </a>
              </div>
              <div class="col-md-7 blog-grid-right">

                <h5>
                  <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                </h5>
                <div class="sub-meta">
                  <span>
                    <i class="far fa-clock"></i> 27 Aug, 2018</span>
                </div>
              </div>

            </div>
            <div class="blog-grids row mb-3">
              <div class="col-md-5 blog-grid-left">
                <a href="single.html">
                  <img src="{{asset('frontend/images/exercise.jpg')}}" class="card-img-top img-fluid rounded" alt="">
                </a>
              </div>
              <div class="col-md-7 blog-grid-right">
                <h5>
                  <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                </h5>
                <div class="sub-meta">
                  <span>
                    <i class="far fa-clock"></i> 27 Aug, 2018</span>
                </div>
              </div>

            </div>
          </div>
          <div class="tech-btm widget_social text-left">
            <h4>Stay Connect</h4>
            <ul>

              <li>
                <a class="twitter" href="#">
                  <i class="fab fa-twitter"></i>
                  <span class="count">317K</span> Twitter Followers</a>
              </li>
              <li>
                <a class="facebook" href="#">
                  <i class="fab fa-facebook-f"></i>
                  <span class="count">218k</span> Facebook Followers</a>
              </li>
              <li>
                <a class="dribble" href="#">
                  <i class="fab fa-dribbble"></i>

                  <span class="count">215k</span> Dribble Followers</a>
              </li>
              <li>
                <a class="pin" href="#">
                  <i class="fab fa-pinterest"></i>
                  <span class="count">190k</span> Pinterest Followers</a>
              </li>

            </ul>
          </div>
          <div class="tech-btm">
            <h4>Recent Posts</h4>

            <div class="blog-grids row mb-3 text-left">
              <div class="col-md-5 blog-grid-left">
                <a href="single.html">
                  <img src="{{asset('frontend/images/training.jpg')}}" class="card-img-top img-fluid rounded" alt="">
                </a>
              </div>
              <div class="col-md-7 blog-grid-right">

                <h5>
                  <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                </h5>
                <div class="sub-meta">
                  <span>
                    <i class="far fa-clock"></i> 27 Aug, 2018</span>
                </div>
              </div>

            </div>
            <div class="blog-grids row mb-3 text-left">
              <div class="col-md-5 blog-grid-left">
                <a href="single.html">
                  <img src="{{asset('frontend/images/exercise.jpg')}}" class="card-img-top img-fluid rounded" alt="">
                </a>
              </div>
              <div class="col-md-7 blog-grid-right">

                <h5>
                  <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                </h5>
                <div class="sub-meta">
                  <span>
                    <i class="far fa-clock"></i> 27 Aug, 2018</span>
                </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </aside>
      <!--//right-->
    </div>
  </div>
</section>
<!-- //contact -->

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
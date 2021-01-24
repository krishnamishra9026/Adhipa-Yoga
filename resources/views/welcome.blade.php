@extends('layouts.frontend.app')
@section('head')
<title>Welcome to Adhipa Yoga</title>
@endsection
@section('content')

<body>
<!-- header -->

<!-- //header -->

<!-- banner -->
<div class="banner">
    <div class="layer">
        <div class="container">
            <div class="banner-text-agile">
                <div class="row">
                    <div class="col-lg-7 p-0">
                        <!-- Carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                        <span>Getting fit is all about mind</span> over matter</h3>
                                    <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
                                     Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis luctus lectus.
                                     Morbi at dui nisl.</p>
                                    <a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">Read More</a>
                                </div>
                                <!-- slider text -->
                                <div class="carousel-item">
                                    <h3 class="b-w3ltxt text-capitalize mt-md-4">
                                        <span>physical activity enhances  </span>positive energy</h3>
                                    <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
                                     Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis luctus lectus.
                                     Morbi at dui nisl.</p>
                                    <a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">Read More</a>
                                </div>
                                <!-- slider text -->
                                <div class="carousel-item text-white">
                                    <h3 class="b-w3ltxt  text-capitalize mt-md-4">
                                        <span> best activities for health are</span>  pumping</h3>
                                    <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
                                     Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis luctus lectus.
                                     Morbi at dui nisl.</p>
                                    <a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="services.html" role="button">Read More</a>
                                </div>
                                <!-- slider text -->
                            </div>
                        </div>
                        <!-- Carousel -->
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
        </div>
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

<!-- Offers -->
<section class="offers py-5">
    <div class="container py-md-3">
        <h4 class="heading text-center">Health Center</h4>
        <h3 class="heading text-center mb-5">What we do </h3>
        <div class="row offer-grids">
            <div class="col-lg-4 col-md-6">
                <div class="gym">
                    <h4 class="text-center">Gym</h4>
                </div>
                <h5 class="mt-5">Vestibulum ante ipsum primis inorc faucibus orci luctus et ultrices et posuere cubilia Curae nisl, Curabitur quis luctus lectus.
                Morbi at duins. Nulla sed justo tellus id felis sed felis faucibus orci.</h5>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="offer-icon mt-lg-0 mt-4 mb-4 text-center">
                    <i class="far fa-thumbs-up"></i>
                </div>
                <div class="training mb-4">
                    <h4 class="text-center">Training</h4>
                </div>
                <div class="exercise">
                    <h4 class="text-center">Exercise</h4>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <h5 class="mb-5">Vestibulum ante ipsum primis inorc faucibus orci luctus et ultrices et posuere cubilia Curae nisl, Curabitur quis luctus lectus.
                Morbi at duins. Nulla sed justo tellus id felis sed felis faucibus orci.</h5>
                <div class="yoga">
                    <h4 class="text-center">Yoga</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //Offers -->   
        
<!-- blog -->
<section class="blog py-5">
    <div class="container py-md-5 py-3">
        <h4 class="heading text-center">Health Center</h4>
        <h3 class="heading text-center mb-5">Fitness blog </h3>
        <div class="row blog-grids">
            <div class="col-lg-7 mb-lg-5 blog-img1">
                <img src="{{asset('frontend/images/blog1.jpg')}}" alt="" class="img-fluid"/>
                <a href="single.html">Blog #1</a>
            </div>
            <div class="col-lg-5 mb-5">
                <h5>August 27, 2018.</h5>
                <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
                <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
                 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
                <a href="single.html" class="btn-banner"> View Post </a>
            </div>
            <div class="col-lg-5 mb-lg-0 mb-4">
                <h5>August 27, 2018.</h5>
                <h4 class="my-3">Nullam dui mi, vulputate ac</h4>
                <p class="my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
                 Vestibulum ante ipsum primis in faucibus orci luctus et ultrices morbi posuere cubilia Curae; Curabitur quis luctus lectus.</p>
                <a href="single.html" class="btn-banner"> View Post </a>
            </div>
            <div class="col-lg-7 blog-img2">
                <img src="{{asset('frontend/images/blog2.jpg')}}" alt="" class="img-fluid"/>
                <a href="single.html">Blog #2</a>
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

<!-- footer -->

<!-- //footer -->

    <!-- //end-smoth-scrolling -->

</body>
</html>

@endsection
@push('scripts')

@endpush
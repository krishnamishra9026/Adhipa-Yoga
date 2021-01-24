<footer class="py-5">
    <div class="container py-sm-3">
        <div class="row footer-grids">
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                <h4 class="mb-4">Healty Tips</h4>
                <ul>
                    <li><a href="#"> Fuel Your Body Right Before And After The Workout</a></li>
                    <li class="mt-2"><a href="#">Remember Rest Is Required</a></li>
                </ul>
                <a class="btn btn-banner mt-md-3 mt-2 text-capitalize" href="/contactus" role="button"> Contact Us</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                <h4 class="mb-4">Quick Links</h4>
                <ul>
                    <li><a href="/terms-conditions">Terms & Conditions</a></li>
                    <li class="my-2"><a href="#">Support Helpline</a></li>
                    <li><a href="#">Fitness Tips</a></li>
                    <li class="mt-2"><a href="#">Privacy Ploicy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-md-0 mb-sm-5 mb-4">
                <h4 class="mb-4">Address Info</h4>
                <p><i class="fas mr-2 fa-map-marker"></i>Eiusmod Tempor inc St Dolore <span>Place, Kingsport 56777.</span></p>
                <p class="phone py-2"><i class="fas mr-2 fa-phone"></i>Phone : +1 123 456 789 </p>
                <p><i class="fas mr-2 fa-envelope"></i>Email : <a href="mailto:example@email.com">mail@example.com</a></p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h4 class="mb-4">Subscribe Us</h4>
                <form action="#" method="post">
                    <input type="email" id="email" name="EMAIL" placeholder="Enter Your Email Here" required="">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
        <div class="copyright mt-5 text-center">
            <p>© 2018 Fitness Health. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
        </div>
    </div>
</footer>

<!--model-forms-->
<!--/Login-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="mb-2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                        <p class="text-center pb-4">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
<!--/Register-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Register Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                        <p class="text-center pb-4">
                            <a href="#">By clicking Register, I agree to your terms</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!--//Register-->
<!--//model-forms-->

    <!-- js -->
    <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <!-- //js -->
    
    <!-- Banner text Responsiveslides -->
    <script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner text  Responsiveslides -->

    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="{{asset('frontend/js/move-top.js')}}"></script>
    <script src="{{asset('frontend/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
             };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
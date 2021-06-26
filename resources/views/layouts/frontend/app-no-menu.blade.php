<!doctype html>
<html lang="en">
@include('layouts.frontend.head')
<body>
	<div class="loader">
		<div class="loader-inner">
			<div class="bounce">
				<div class="bounce-one"></div>
				<div class="bounce-two"></div>
			</div>
		</div>
	</div>
	<div id="wrapper" class="wrapper">
	<header class="header default bg-stats">
            <div class="header-section">
               <div class="container-fluid ">
                  <nav class="navbar navbar-expand-lg header-navbar ml-0 ml-lg-5">
                     <a class=" navbar-brand navbar-logo scroll" href="#wrapper">
                     <img class="mb-0 logo-light" src="{{asset('frontend/assets/svg/logo-light.svg')}}" alt="">
                     <img class="mb-0 logo-dark" src="{{asset('frontend/assets/svg/logo-dark.svg')}}" alt="">
                     </a>
                  </nav>
               </div>
            </div>
    </header>
		@yield('content')

		@include('layouts.frontend.includes.footer')
	</div>
	<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/smooth-scroll.js')}}"></script>
	<script src="{{asset('frontend/js/venobox.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
	<script src="{{asset('frontend/js/jarallax.min.js')}}"></script>
	<script src="{{asset('frontend/js/jarallax-element.min.js')}}"></script>
	<script src="{{asset('frontend/js/placeholders.min.js')}}"></script>
	<script src="{{asset('frontend/js/instafeed.min.js')}}"></script>
	<script src="{{asset('frontend/js/script.js')}}"></script>

	<!--start daterangepicker-->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

	<!--end daterangepicker-->
	<script type="text/javascript">
		$(function() {
		 	
		 	var dateToday = moment().add(1, 'days');    

			$('.datepicker').daterangepicker({
		     	singleDatePicker: true,
		     	autoApply:true,
		     	drops:'up',
			   minDate: dateToday 
			  }, function(start, end, label) {
			    // var years = moment().diff(start, 'years');
			    // alert("You are " + years + " years old!");
			});
		});
	</script>
	 @stack('scripts')
</body>
</html>
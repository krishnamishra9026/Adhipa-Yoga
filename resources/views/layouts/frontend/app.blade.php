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
		@include('layouts.frontend.includes.header')

		@yield('content')

		@include('layouts.frontend.includes.footer')
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/smooth-scroll.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jarallax.min.js')}}"></script>
	<script src="{{asset('frontend/js/jarallax-element.min.js')}}"></script>
	<script src="{{asset('frontend/js/placeholders.min.js')}}"></script>
	<script src="{{asset('frontend/js/instafeed.min.js')}}"></script>
	<script src="{{asset('frontend/js/script.min.js')}}"></script>
	 @stack('scripts')
</body>
</html>
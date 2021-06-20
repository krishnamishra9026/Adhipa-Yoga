@extends('layouts.frontend.app-no-menu')
@section('content')
<div class="jumbotron jumbotron-fluid bg-stats">

</div>

<section>
<div class="paid text-center">
	<i class="fa fa-check"></i>
	<h4>Payment Successful</h4>
	<p>You will be redirected automatically in few seconds</p>
</div>


</section>
<script type="text/javascript">
window.setTimeout(function() {
    window.location.href = '{{ url('/') }}';
}, 5000);
</script>

@endsection


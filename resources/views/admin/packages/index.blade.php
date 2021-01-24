@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
	<div class="col-lg-12">
		<a class="btn btn-success" href="{{ route('admin.packages.create') }}">
			{{ trans('global.add') }} Package
		</a>
	</div>
</div>
<div class="card">
	<div class="card-header">
		Package {{ trans('global.list') }}
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table id="data-table-10" class="table table-striped thead-primary w-100"></table>
		</div>
	</div>
</div>
@endsection
@section('scripts')
@parent
<script>
	var dataSet8 = [
	@foreach($packages as $package)
	[ "{{ $no++ }}" ,"{{ $package->name }}", "SAR "+ {{ $package->price }}, {{ $package->validity }}+" days",@if($package->status == 'on')"Enabled" @else "Disabled" @endif , "<a href='{{route('admin.packages.edit',$package)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='javascript:' onclick='submitform({{ $no }});'><i class='far fa-trash-alt ms-text-danger'></i></a><form id='delete-form{{$no}}' action='{{route('admin.packages.destroy',$package)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token()}}'><input type='hidden' name='_method' value='DELETE'></form>"],
	@endforeach
	];
	var tablepackage = $('#data-table-10').DataTable( {
		data: dataSet8,
		columns: [
		{ title: "Id" },
		{ title: "Package Name" },
		{ title: "Price" },
		{ title: "Validity" },
		{ title: "Status" },
		{ title: "Action" },
		],

	});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		setTimeout(function() {
			$('.alert-success').fadeOut('fast');
		}, 2200);
	});
</script>
<script type="text/javascript">
	function submitform(no){
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this Package!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				document.getElementById('delete-form'+no).submit();
			}
		});
	}
</script>
@endsection
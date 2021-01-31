@extends('layouts.admin')
@section('head')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endsection

@section('content')
	<div class="card">
    <div class="card-header">
        Update Setting
    </div>

    <div class="card-body">
				<form class="needs-validation clearfix" method="POST" action="{{route('admin.setting.update',$setting['id'])}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					@php $i =1; @endphp
					@foreach($setting as $key =>  $settings)
					<div class="col-md-12"  @if ($i == 1) style="display: none;" @endif>
						<label for="term">{{ ucfirst(str_replace('_', ' ' , $key)) }}</label>
						<div class="input-group">
							<textarea rows="1" name="{{ $key }}" class="form-control" placeholder="" required>{{$settings}}</textarea>
							<div class="invalid-feedback">
								Mention Setting
							</div>
						</div>
					</div>
					@php $i++; @endphp
					@endforeach
					<br>
					<input type="submit" name="Update" value="Update" class="btn btn-primary">	
				</form>
			</div>
		</div>

@endsection

@section('scripts')
@parent
<script>
	// CKEDITOR.replace( 'setting' );
</script>
@endsection
@extends('layouts.admin')
@section('head')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endsection

@section('content')
	<div class="card">
    <div class="card-header">
        Update About Us
    </div>

    <div class="card-body">
				<form class="needs-validation clearfix" method="POST" action="{{route('admin.about.update',$about->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="col-md-12">
						<label for="term">About</label>
						<div class="input-group">
							<textarea rows="12" name="about" class="form-control" placeholder="" required>{{$about->content}}</textarea>
							<div class="invalid-feedback">
								Mention About Us
							</div>
						</div>
					</div>
					<br>
					<input type="submit" name="Update" value="Update" class="btn btn-primary">	
				</form>
			</div>
		</div>

@endsection

@section('scripts')
@parent
<script>
	CKEDITOR.replace( 'about' );
</script>
@endsection
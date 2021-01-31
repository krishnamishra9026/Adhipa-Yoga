@extends('layouts.admin')
@section('head')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Update Terms & Conditions
    </div>

    <div class="card-body">
				<form class="needs-validation clearfix" method="POST" action="{{route('admin.terms-and-conditions.update',$term->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="col-md-12">
						<label for="term">Terms & Conditions</label>
						<div class="input-group">
							<textarea rows="12" name="term" class="form-control" placeholder="" required>{{$term->content}}</textarea>
							<div class="invalid-feedback">
								Mention Terms and Conditions
							</div>
						</div>
					</div>
					<br>
					<input type="submit" name="Update" value="Update" class="btn btn-primary">	
				</form>
			</div>
		</div>
@endsection

@push('scripts')
{{-- <script>
	CKEDITOR.replace( 'term' );
</script> --}}
@endpush
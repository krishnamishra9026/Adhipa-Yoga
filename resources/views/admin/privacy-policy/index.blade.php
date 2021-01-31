@extends('layouts.admin')
@section('head')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Update Privacy Policy
    </div>

    <div class="card-body">
				<form class="needs-validation clearfix" method="POST" action="{{route('admin.privacy-policy.update',$privacy_policy->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="col-md-12">
						<label for="privacy_policy">Privacy Policy</label>
						<div class="input-group">
							<textarea rows="12" name="privacy_policy" class="form-control" placeholder="" required>{{$privacy_policy->content}}</textarea>
							<div class="invalid-feedback">
								Mention Privacy Policy
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
	CKEDITOR.replace( 'privacy_policy' );
</script> --}}
@endpush
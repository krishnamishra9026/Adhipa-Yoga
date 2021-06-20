










													<div class="form-group">
												<div class="form-group">
											<input id="avatar-2" name="image" type="file" class="form-control">
										        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
										      </div>
										</div>
										<div class="col-md-3">
										<div class="file-loading">
										<option @if(in_array(1, $package->workout_days)) selected @endif value="1">1</option>
										<option @if(in_array(2, $package->workout_days)) selected @endif value="2">2</option>
										<option @if(in_array(3, $package->workout_days)) selected @endif value="3">3</option>
										<option @if(in_array(4, $package->workout_days)) selected @endif value="4">4</option>
										<option @if(in_array(5, $package->workout_days)) selected @endif value="5">5</option>
										<option @if(in_array(6, $package->workout_days)) selected @endif value="6">6</option>
										<option @if(in_array(7, $package->workout_days)) selected @endif value="7">7</option>
										<option value="">Please Select days</option>
										Enter Validity For Package.
										Please Enter a Name.
										Please Enter No of classes in Package.
										Please provide a Sort Number.
										Please provide a Sort Number.
										Please Write about Package.
									        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
									      </div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</select>
									<div class="col-md-3">
									<div class="invalid-feedback">
									<div class="invalid-feedback">
									<div class="invalid-feedback">
									<div class="invalid-feedback">
									<div class="invalid-feedback">
									<div class="invalid-feedback">
									<div class="kv-avatar">
									<input type="checkbox" @if($package->status == "on") checked="" @endif name="status">
									<input type="number" class="form-control" name="no_of_classes" id="no_of_classes" value="{{ $package->no_of_classes }}" required>
									<input type="number" class="form-control" name="price" id="price" placeholder="Package Price" value="{{ $package->price }}" required>
									<input type="number" class="form-control" name="sort" id="sort" placeholder="Sort Order" value="{{ $package->sort }}" required >
									<input type="text" class="form-control" name="validity" id="validity" placeholder="Package Validity (In Days)" value="{{ $package->validity }}" required>
									<input type="text" id="name" name="name" class="form-control" placeholder="Package Name" value="{{ $package->name }}" required>
									<label for="workout_days">Days</label>
									<select data-placeholder="Please Select Workout Days" class="js-example-basic-multiple form-control" name="workout_days[]" multiple="multiple" style="width: 100%">
									<small>Note: File-size should be less than 1.5 MB</small>
									<span class="ms-switch-slider ms-switch-primary square"></span>
									<textarea rows="8" id="description" name="description" class="form-control" placeholder="Write about Package." required>{{ $package->description }}</textarea>
								        	<div class="input-group-btn">
								                <input class="form-control enddate" type="text" name="endTime[]"  value="" required>
								                <input class="form-control startdate" type="text" name="startTime[]" value="{" required>
								                <input class="form-control" type="text" name="link[]"  value="" required>
								                <label class="required" for="end_time">End time</label>
								                <label class="required" for="link">Link</label>
								                <label class="required" for="start_time">Start time</label>
								            </div>
								            </div>
								            </div>
								            <div class="form-group">
								            <div class="form-group">
								        </div>
								        </div>
								        </div>
								        </div>
								        <div class="col-md-1" style="margin-top: 25px;">
								        <div class="col-md-3">
								        <div class="col-md-5">
								    <div class="form-row">
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</label>
								<div class="form-row">
								<div class="input-group avat">
								<div class="input-group">
								<div class="input-group">
								<div class="input-group">
								<div class="input-group">
								<div class="input-group">
								<div class="input-group">
								<div class="input-group">
								<div class="kv-avatar-hint">
								<div id="kv-avatar-errors-2" class="center-block mt-3" style="width:336px;display:none"></div>
								<label class="ms-switch">
								<label for="description">Package Description</label>
								<label for="name">Package Name</label>
								<label for="no_of_classes">No of classes in Package</label>
								<label for="price">Package Price</label>
								<label for="sort">Sort Order</label>
								<label for="validationCustom12">Upload Image</label>
								<label for="validity">Package Validity (In Days)</label>
								<span> Enable </span>
								@endif
								@foreach ($packageTimings as $key => $packageTiming)
								@if(!$packageTimings->isEmpty())
							    	</div>      
							        	<div class="input-group-btn">
							                <input class="form-control enddate" type="text" name="endTime[]"  value="{{ $packageTiming->endTime }}" required>
							                <input class="form-control startdate" type="text" name="startTime[]" value="{{ $packageTiming->startTime }}" required>
							                <input class="form-control" type="text" name="link[]"  value="{{ $packageTiming->link }}" required>
							                <label class="required" for="end_time">End time</label>
							                <label class="required" for="link">Link</label>
							                <label class="required" for="start_time">Start time</label>
							            </div>
							            </div>
							            </div>
							            <div class="form-group">
							            <div class="form-group">
							        </div>
							        </div>
							        </div>
							        </div>
							        <div class="col-md-1" style="margin-top: 25px;">
							        <div class="col-md-3">
							        <div class="col-md-5">
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>	
							</div>	
							</div>					
							<div class="col-md-12 pt-4">
							<div class="col-md-12">
							<div class="col-md-12">
							<div class="col-md-12">
							<div class="col-xl-6 col-md-12 mb-3" style="display: none;">
							<div class="col-xl-6 col-md-12">
							<div class="col-xl-6 col-md-12">
							<div class="col-xl-6 col-md-12">
							<div class="col-xl-6 col-md-12">
							<div class="form-row">
							<div id="education_fields">
						    	</div>
						    	@else
						    	@endforeach
						</div>
						<button class="btn btn-primary float-right" type="submit">Save</button>
						<div class="form-row">
						@csrf
						{{ method_field('PUT') }}
					<form class="needs-validation clearfix" method="POST" id="package" action="{{route('admin.packages.update',$package)}}" enctype="multipart/form-data">
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      down: 'fas fa-chevron-down',
			      down: 'fas fa-chevron-down',
			      next: 'fas fa-chevron-right'
			      next: 'fas fa-chevron-right'
			      previous: 'fas fa-chevron-left',
			      previous: 'fas fa-chevron-left',
			      up: 'fas fa-chevron-up',
			      up: 'fas fa-chevron-up',
			    }
			    }
			 initialPreviewAsData: true, // defaults markup
			"{{asset('uploads/packages/'.$package->image)}}"
			//                alert('Please select correct date');
			//         if(startDate>endDate){
			//         var endDate = $(".enddate").val();
			//         }
			//  onClose: function(current_time, $input){
			// }
			@if(isset($package->image))
			],
			allowedFileExtensions: ["jpg", "png", "gif"],
			browseOnZoneClick: true,
			defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
			elErrorContainer: '#kv-avatar-errors-2',
			format: 'HH:mm',
			format: 'HH:mm',
			headers: {
			icons: {
			icons: {
			initialPreview: [
			layoutTemplates: {main2: '{preview} {remove} {browse}'},
			maxFileSize: 1500,
			msgErrorClass: 'alert alert-block alert-danger',
			overwriteInitial: false,
			removeIcon: '<i class="flaticon-trash"></i> Remove Image',
			removeLabel: '',
			removeTitle: 'Cancel or reset changes',
			showBrowse: false,
			showCaption: false,
			showClose: false,
			stepping: 30,
			stepping: 30,
			tags: true,
			theme:'fas',
			tokenSeparators: [',', ' ']
			}
		        $('.endtime').datetimepicker('setStartDate',new Date(-8639968443048000));
		        $('.endtime').datetimepicker('setStartDate',starttime);
		        $('.starttime').datetimepicker('setEndDate',endtime);
		        $('.starttime').datetimepicker('setEndDate',new Date(8639968443048000));
		      down: 'fas fa-chevron-down',
		      next: 'fas fa-chevron-right'
		      previous: 'fas fa-chevron-left',
		      up: 'fas fa-chevron-up',
		    //The start time changes, and the minimum value of the end time is set as the end time.
		    format: 'HH:mm',
		    icons: {
		    if(endtime){
		    if(starttime){
		    stepping: 30,
		    var endtime=$('.endtime').val();
		    var starttime=$('.startdate').val();
		    }
		    }
		    }
		    }else {
		    }else {
		  })
		$("#avatar-2").fileinput({
		$('.js-example-basic-multiple').select2({
		$.ajaxSetup({
		<a style="float: right;" href="{{ route('admin.packages.index') }}" class="ms-btn-icon btn-square btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i>Back</a>	
		border: none;
		box-shadow: none;
		color: red;
		display: block;
		display: inline-block;
		display: table-cell;
		divtest.setAttribute("class", "form-row removeclass"+room);
		Edit Package
		font-family: monospace;
		font-weight: normal;
		height: 38px !important;
		margin: 0;
		padding: 0;
		text-align: center;
		text-align: center;
		var rdiv = 'removeclass'+room;
		var startDate;
		width: 237px;
		});
		});
		});
		});
	 
	    
	        // End time changes, the maximum value of the start time is set to the end time
	      $('.lesson-timepicker').datetimepicker({
	    divtest.innerHTML = '<div class="col-md-3"><div class="form-group"><label class="required" for="start_time">Start time</label><input class="form-control lesson-timepicker {" type="text" name="startTime[]"  value="" required><span class="help-block"></span></div></div><div class="col-md-3"><div class="form-group"><label class="required" for="end_time">End time</label><input class="form-control lesson-timepicker" type="text" name="endTime[]" value="" required></div></div><div class="col-md-5"><div class="form-group"><label class="required" for="link">Link</label><input class="form-control" type="text" name="link[]" value="" required></div></div><div class="col-md-1" style="margin-top: 25px;"><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_education_fields('+ room +');"> <span class="fa fa-minus" aria-hidden="true"></span></button></div></div>';
	    objTo.appendChild(divtest)
	    room++;
	    var divtest = document.createElement("div");
	    var objTo = document.getElementById('education_fields')
	   $('.removeclass'+rid).remove();
	$(document).ready(function() {
	.input-group.avat {
	.kv-avatar .file-input {
	.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
	.kv-avatar {
	.kv-reqd {
	.select2-selection {
	<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
	<!-- the main fileinput plugin file -->
	</div>
	</div>
	<div class="card-body">
	<div class="card-header">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/fas/theme.js"></script>
	<script>
	function education_fields() {
	function remove_education_fields(rid) {
	HTML files. This must be loaded before fileinput.min.js -->
	input {
	This must be loaded before fileinput.min.js -->
	var room = 1;
	}
	}
	}
	}
	}
	}
	}
	}
	}
	});
        	debugger;
        $(".enddate").datetimepicker({
        $(".startdate").datetimepicker({
        }).on('dp.change', function (event) {
        }).on('dp.change', function (event) {
    @endif
    ],
    initialPreviewConfig: [
    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    {caption: "{{$package->image}}", url: "{{route('admin.package-image-delete',$package)}}", key: {{$package->id}} }
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
</div>
</form>
</script>
</script>
</style>
<div class="card">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/piexif.min.js" type="text/javascript"></script>
<script type="text/javascript">
<style>
@endsection
@endsection
@endsection
@extends('layouts.admin')
@parent
@section('content')
@section('content')
@section('head')
@section('scripts')
});
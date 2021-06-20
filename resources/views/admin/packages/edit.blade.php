@extends('layouts.admin')
@section('content')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>
	input {
		text-align: center;
	}
	.select2-selection {
		height: 38px !important;
	}
	.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
		margin: 0;
		padding: 0;
		border: none;
		box-shadow: none;
		text-align: center;
	}
	.kv-avatar {
		display: inline-block;
	}
	.kv-avatar .file-input {
		display: table-cell;
		width: 237px;
	}
	.kv-reqd {
		color: red;
		font-family: monospace;
		font-weight: normal;
	}
	.input-group.avat {
		display: block;
	}

</style>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		Edit Package
		<a style="float: right;" href="{{ route('admin.packages.index') }}" class="ms-btn-icon btn-square btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i>Back</a>	
	</div>

	<div class="card-body">
					<form class="needs-validation clearfix" method="POST" id="package" action="{{route('admin.packages.update',$package)}}" enctype="multipart/form-data">
						@csrf
						{{ method_field('PUT') }}
						<div class="form-row">
							<div class="col-md-12">
								<label for="name">Package Name</label>
								<div class="input-group">
									<input type="text" id="name" name="name" class="form-control" placeholder="Package Name" value="{{ $package->name }}" required>
									<div class="invalid-feedback">
										Please Enter a Name.
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12 mb-3" style="display: none;">
								<label for="no_of_classes">No of classes in Package</label>
								<div class="input-group">
									<input type="number" class="form-control" name="no_of_classes" id="no_of_classes" value="{{ $package->no_of_classes }}" required>
									<div class="invalid-feedback">
										Please Enter No of classes in Package.
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<label for="sort">Sort Order</label>
								<div class="input-group">
									<input type="number" class="form-control" name="sort" id="sort" placeholder="Sort Order" value="{{ $package->sort }}" required >
									<div class="invalid-feedback">
										Please provide a Sort Number.
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="input-group">
									<label for="workout_days">Days</label>
									<select data-placeholder="Please Select Workout Days" class="js-example-basic-multiple form-control" name="workout_days[]" multiple="multiple" style="width: 100%">
										<option value="">Please Select days</option>
										<option @if(in_array(1, $package->workout_days)) selected @endif value="1">1</option>
										<option @if(in_array(2, $package->workout_days)) selected @endif value="2">2</option>
										<option @if(in_array(3, $package->workout_days)) selected @endif value="3">3</option>
										<option @if(in_array(4, $package->workout_days)) selected @endif value="4">4</option>
										<option @if(in_array(5, $package->workout_days)) selected @endif value="5">5</option>
										<option @if(in_array(6, $package->workout_days)) selected @endif value="6">6</option>
										<option @if(in_array(7, $package->workout_days)) selected @endif value="7">7</option>
									</select>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<label for="price">Package Price</label>
								<div class="input-group">
									<input type="number" class="form-control" name="price" id="price" placeholder="Package Price" value="{{ $package->price }}" required>
									<div class="invalid-feedback">
										Please provide a Sort Number.
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<label for="validity">Package Validity (In Days)</label>
								<div class="input-group">
									<input type="text" class="form-control" name="validity" id="validity" placeholder="Package Validity (In Days)" value="{{ $package->validity }}" required>
									<div class="invalid-feedback">
										Enter Validity For Package.
									</div>
								</div>
							</div>
							</div>
							<div id="education_fields">
								@if(!$packageTimings->isEmpty())
								@foreach ($packageTimings as $key => $packageTiming)
								<div class="form-row">
									<div class="col-md-3">
												<div class="form-group">
							                <label class="required" for="start_time">Start time</label>
							                <input class="form-control startdate" type="text" name="startTime[]" value="{{ $packageTiming->startTime }}" required>
							            </div>
							        </div>
							        <div class="col-md-3">
							            <div class="form-group">
							                <label class="required" for="end_time">End time</label>
							                <input class="form-control enddate" type="text" name="endTime[]"  value="{{ $packageTiming->endTime }}" required>
							            </div>
							        </div>
							        <div class="col-md-5">
							            <div class="form-group">
							                <label class="required" for="link">Link</label>
							                <input class="form-control" type="text" name="link[]"  value="{{ $packageTiming->link }}" required>
							            </div>
							        </div>
							        <div class="col-md-1" style="margin-top: 25px;">
							        	<div class="input-group-btn">
									        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
									      </div>
							        </div>
						    	</div>
						    	@endforeach
						    	@else
								    <div class="form-row">
										<div class="col-md-3">
													<div class="form-group">
								                <label class="required" for="start_time">Start time</label>
								                <input class="form-control startdate" type="text" name="startTime[]" value="{" required>
								            </div>
								        </div>
								        <div class="col-md-3">
								            <div class="form-group">
								                <label class="required" for="end_time">End time</label>
								                <input class="form-control enddate" type="text" name="endTime[]"  value="" required>
								            </div>
								        </div>
								        <div class="col-md-5">
								            <div class="form-group">
								                <label class="required" for="link">Link</label>
								                <input class="form-control" type="text" name="link[]"  value="" required>
								            </div>
								        </div>
								        <div class="col-md-1" style="margin-top: 25px;">
								        	<div class="input-group-btn">
										        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
										      </div>
								        </div>
							    	</div>      
								@endif
							</div>
							<div class="form-row">
							<div class="col-md-12">
								<label for="description">Package Description</label>
								<div class="input-group">
									<textarea rows="8" id="description" name="description" class="form-control" placeholder="Write about Package." required>{{ $package->description }}</textarea>
									<div class="invalid-feedback">
										Please Write about Package.
									</div>
								</div>
							</div>	
							<div class="col-md-12">
								<label for="validationCustom12">Upload Image</label>
								<div class="input-group avat">
									<div class="kv-avatar">
										<div class="file-loading">
											<input id="avatar-2" name="image" type="file" class="form-control">
										</div>
									</div>
								</div>
								<div class="kv-avatar-hint">
									<small>Note: File-size should be less than 1.5 MB</small>
								</div>
								<div id="kv-avatar-errors-2" class="center-block mt-3" style="width:336px;display:none"></div>
							</div>	
							<div class="col-md-12 pt-4">
								<label class="ms-switch">
									<input type="checkbox" @if($package->status == "on") checked="" @endif name="status">
									<span class="ms-switch-slider ms-switch-primary square"></span>
								</label>
								<span> Enable </span>
							</div>					
						</div>
						<button class="btn btn-primary float-right" type="submit">Save</button>
</form>


	</div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
	This must be loaded before fileinput.min.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
	HTML files. This must be loaded before fileinput.min.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/purify.min.js" type="text/javascript"></script>
	<!-- the main fileinput plugin file -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
	<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/fas/theme.js"></script>

	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#avatar-2").fileinput({
			theme:'fas',
			overwriteInitial: false,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			showBrowse: false,
			browseOnZoneClick: true,
			removeLabel: '',
			removeIcon: '<i class="flaticon-trash"></i> Remove Image',
			removeTitle: 'Cancel or reset changes',
			elErrorContainer: '#kv-avatar-errors-2',
			msgErrorClass: 'alert alert-block alert-danger',
			defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
			layoutTemplates: {main2: '{preview} {remove} {browse}'},
			allowedFileExtensions: ["jpg", "png", "gif"],
			@if(isset($package->image))
			initialPreview: [
			"{{asset('uploads/packages/'.$package->image)}}"
			],
			 initialPreviewAsData: true, // defaults markup

    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    initialPreviewConfig: [
    {caption: "{{$package->image}}", url: "{{route('admin.package-image-delete',$package)}}", key: {{$package->id}} }
    ],
    @endif
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2({
			tags: true,
			tokenSeparators: [',', ' ']
		});

		var startDate;
        $(".startdate").datetimepicker({
			format: 'HH:mm',
			stepping: 30,
			icons: {
			      up: 'fas fa-chevron-up',
			      down: 'fas fa-chevron-down',
			      previous: 'fas fa-chevron-left',
			      next: 'fas fa-chevron-right'
			    }
        }).on('dp.change', function (event) {
        	debugger;
		    //The start time changes, and the minimum value of the end time is set as the end time.
		    var starttime=$('.startdate').val();
		    if(starttime){
		        $('.endtime').datetimepicker('setStartDate',starttime);
		    }else {
		        $('.endtime').datetimepicker('setStartDate',new Date(-8639968443048000));
		    }
		});
        $(".enddate").datetimepicker({
			format: 'HH:mm',
			stepping: 30,
			icons: {
			      up: 'fas fa-chevron-up',
			      down: 'fas fa-chevron-down',
			      previous: 'fas fa-chevron-left',
			      next: 'fas fa-chevron-right'
			    }
			//  onClose: function(current_time, $input){
			//         var endDate = $(".enddate").val();
			//         if(startDate>endDate){
			//                alert('Please select correct date');
			//         }
			// }
        }).on('dp.change', function (event) {
	        // End time changes, the maximum value of the start time is set to the end time
		    var endtime=$('.endtime').val();
		    if(endtime){
		        $('.starttime').datetimepicker('setEndDate',endtime);
		    }else {
		        $('.starttime').datetimepicker('setEndDate',new Date(8639968443048000));
		    }
		});


	});

	var room = 1;
	function education_fields() {
	 
	    room++;
	    var objTo = document.getElementById('education_fields')
	    var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-row removeclass"+room);
		var rdiv = 'removeclass'+room;
	    divtest.innerHTML = '<div class="col-md-3"><div class="form-group"><label class="required" for="start_time">Start time</label><input class="form-control lesson-timepicker {" type="text" name="startTime[]"  value="" required><span class="help-block"></span></div></div><div class="col-md-3"><div class="form-group"><label class="required" for="end_time">End time</label><input class="form-control lesson-timepicker" type="text" name="endTime[]" value="" required></div></div><div class="col-md-5"><div class="form-group"><label class="required" for="link">Link</label><input class="form-control" type="text" name="link[]" value="" required></div></div><div class="col-md-1" style="margin-top: 25px;"><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_education_fields('+ room +');"> <span class="fa fa-minus" aria-hidden="true"></span></button></div></div>';
	    
	    objTo.appendChild(divtest)

	      $('.lesson-timepicker').datetimepicker({
		    format: 'HH:mm',
		    stepping: 30,
		    icons: {
		      up: 'fas fa-chevron-up',
		      down: 'fas fa-chevron-down',
		      previous: 'fas fa-chevron-left',
		      next: 'fas fa-chevron-right'
		    }
		  })
	}
	function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
	}
</script>
@endsection
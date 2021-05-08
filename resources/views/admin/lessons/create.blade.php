@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.lesson.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.lessons.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="class_id">{{ trans('cruds.lesson.fields.class') }}</label>
                <select class="form-control select2 {{ $errors->has('class') ? 'is-invalid' : '' }}" name="class_id" id="class_id" required>
                    @foreach($classes as $id => $class)
                        <option value="{{ $id }}" {{ old('class_id') == $id ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach
                </select>
                @if($errors->has('class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.lesson.fields.class_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="teacher_id">{{ trans('cruds.lesson.fields.teacher') }}</label>
                <select class="form-control select2 {{ $errors->has('teacher') ? 'is-invalid' : '' }}" name="teacher_id" id="teacher_id" required>
                    @foreach($teachers as $id => $teacher)
                        <option value="{{ $id }}" {{ old('teacher_id') == $id ? 'selected' : '' }}>{{ $teacher }}</option>
                    @endforeach
                </select>
                @if($errors->has('teacher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teacher') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.lesson.fields.teacher_helper') }}</span>
            </div>
                <div id="education_fields">
                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="required" for="link">Weekday</label>
                                <input class="form-control {{ $errors->has('weekday') ? 'is-invalid' : '' }}" type="number" name="weekday[]" value="{{ old('weekday') }}" step="1" required>
                                @if($errors->has('weekday'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('weekday') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                                    <div class="form-group">
                                <label class="required" for="start_time">Start time</label>
                                <input class="form-control startdate" type="text" name="startTime[]" value="" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="required" for="end_time">End time</label>
                                <input class="form-control enddate" type="text" name="endTime[]"  value="{{ old('end_time') }}" required>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-top: 25px;">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
                              </div>
                        </div>
                    </div>
                </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script type="text/javascript">
    $(document).ready(function() {

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
            divtest.innerHTML = '<div class="col-md-5"><div class="form-group"><label class="required" for="weekday">Weekday</label><input class="form-control" type="text" name="weekday[]" value=""></div></div><div class="col-md-3"><div class="form-group"><label class="required" for="start_time">Start time</label><input class="form-control lesson-timepicker {" type="text" name="startTime[]"  value="" required><span class="help-block"></span></div></div><div class="col-md-3"><div class="form-group"><label class="required" for="end_time">End time</label><input class="form-control lesson-timepicker" type="text" name="endTime[]" value="" required></div></div><div class="col-md-1" style="margin-top: 25px;"><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_education_fields('+ room +');"> <span class="fa fa-minus" aria-hidden="true"></span></button></div></div>';
            
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
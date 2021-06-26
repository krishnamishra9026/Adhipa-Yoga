
@extends('layouts.frontend.app-no-menu')
@section('content')
<div class="jumbotron jumbotron-fluid bg-stats">
<div class="container">
  <h1 class="display-4 text-white text-center mt-3">{{$packageData->name}}</h1>
  <p class="display-5 text-white text-center mt-3">Pay for ${{$packageData->price}}</p>
  <button type="button" class="btn btn-sm btn-danger" onclick="history.back(-1)">Back</button>
</div>
</div>

<section>

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <div class="row">
      <form action="{{ route("booking.store") }}" method="post">
        <input type="hidden" name="package_id" value="{{$packageData->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name *</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required="required">
            
          </div>

          <div class="form-group col-md-6">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required">
          </div>

          <div class="form-group col-md-6">
            <label for="mobile">Mobile No *</label>
            <input type="mobile" class="form-control" id="mobile" name="mobileno" placeholder="Enter mobile" required="required">
          </div>

          <div class="form-group col-md-6">
            <label for="startDate">Select Date *</label>
            <input type="text" class="form-control datepicker" id="startDate" name="start_date"required="required">
          </div>

          <div class="form-group col-md-6">
            @foreach($packageDataTimings as $key=>$packageDataTiming)
            <div class="form-check">
              <input class="form-check-input" type="radio" name="package_timing_id" id="radios{{($key+1)}}" value="{{$packageDataTiming->id}}" required="required">
              <label class="form-check-label" for="radios{{($key+1)}}">
                {{$packageDataTiming->startTime}} - {{$packageDataTiming->endTime}}
              </label>
            </div>
            @endforeach
          </div>

        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
            <label class="form-check-label" for="gridCheck">
              Accept Term and condition
            </label>
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
      
    </div>
  </div>
</div>
</div>


</section>

@endsection
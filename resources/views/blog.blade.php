
@extends('layouts.frontend.app-no-menu')
@section('content')
<div class="jumbotron jumbotron-fluid bg-stats">
<div class="container">
  <h1 class="display-4 text-white text-center mt-3">{{ $blog->title }}</h1>
  <button type="button" class="btn btn-sm btn-danger" onclick="history.back(-1)">Back</button>
</div>
</div>

<section>

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <img class="card-img" src="{{asset('uploads/blogs/'.$blog->image)}}" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">{{ $blog->title }}</h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()}} 
          </small>
          <p class="card-text">{{ $blog->description }}</p>
        </div>
        <div class="card-footer text-muted  bg-transparent border-top-0 text-right">
          {{ \Carbon\Carbon::parse($blog->created_at)->format('F d,Y')}}
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</section>

@endsection
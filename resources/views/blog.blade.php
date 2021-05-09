
@extends('layouts.frontend.app')
@section('content')
<div class="jumbotron jumbotron-fluid inner_banner" style="background-image: url('img/terms-conditions.jpg');background-size: cover;
background-position: 50% 50%;">
<div class="container">
  <p class="lead"><br></p>
  <h1 class="display-4"><center>Blog : {{ $blog->title }}</center></h1>
</div>
</div>

<section>

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <img class="card-img" src="{{asset('uploads/blogs/'.$blog->image)}}" alt="Bologna">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm">blog</a>
        </div>
        <div class="card-body">
          <h4 class="card-title">{{ $blog->title }}</h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()}} 
          </small>
          <p class="card-text">{{ $blog->description }}</p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d,Y')}}
          </div>
           
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</section>

@endsection
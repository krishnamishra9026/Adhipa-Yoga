@extends('layouts.frontend.app')
@section('content')


<div class="jumbotron jumbotron-fluid inner_banner" style="background-image: url('img/terms-conditions.jpg');background-size: cover;
background-position: 50% 50%;">
<div class="container">
  <p class="lead"><br></p>
  <h1 class="display-4"><center>GST Suvidha Provider Blogs</center></h1>
</div>
</div>

<section>


<div class="container" style="margin-bottom: 20px;">
  <div class="row">
    @php $i = 0; @endphp
    @foreach($blogs as $blog)
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      @if($i>2) 
    <br/>
    @endif
        <div class="card">
        <img class="card-img" src="../blog/{{$blog->file_path}}" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">{{ $blog->title }}</h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()}} 
            <i class="fas fa-users text-info"></i> 
          </small>
          <p class="card-text">{{ Str::limit($blog->description, 100) }}</p>
          <a href="/blogs/{{ $blog->id }}" class="btn btn-info">Read More</a>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d,Y')}}
          </div>
          <div class="stats">
            <i class="fa fa-eye"> No of Reads:</i> @php echo rand(1,2000); @endphp
            <i class="fa fa-comment"></i> 
          </div>
           
        </div>
        </div>
    </div>
    @php $i++ @endphp
    @endforeach
  </div>
</div>
</section>

@endsection
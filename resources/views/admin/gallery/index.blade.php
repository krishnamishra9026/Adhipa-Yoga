@extends('layouts.admin')
@section('head')
<link href="{{asset('backend/assets/css/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.gallery.create') }}">
                {{ trans('global.add') }} Gallery
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        Gallery
    </div>
    @include('admin.includes.flashmessage')

    <div class="card-body">

                <div class="table-responsive">
                    <table id="data-table-18" class="table table-striped thead-primary w-100"></table>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
<script>
    var dataSet18 = [

    @foreach($images as $image)
    [ "{{ @$no++ }}" ,"{{ $image->title }}", "<a href='{{route('admin.gallery.edit',$image)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='javascript:' onclick='submitform({{ $no }});'><i class='far fa-trash-alt ms-text-danger'></i></a><form id='delete-form{{$no}}' action='{{route('admin.gallery.destroy',$image)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token()}}'><input type='hidden' name='_method' value='DELETE'></form>"],
    @endforeach
    ];
    var tablepackage = $('#data-table-18').DataTable( {
        data: dataSet18,
        columns: [
        { title: "Id" },
        { title: "Title" },
        { title: "Action" },
        ],

    });

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 2200);
    });
</script>
<script type="text/javascript">
    function submitform(no){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Package!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.getElementById('delete-form'+no).submit();
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
@endsection
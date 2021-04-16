@extends('layouts.admin')
@section('head')
<link href="{{asset('backend/assets/css/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Main Services
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
@parent
<script>
    var dataSet18 = [
        [
            "Beginer Classes",
            "<a href='{{route('admin.blogs.edit',1)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a>"
        ],
        [
            "Advanced Classes",
            "<a href='{{route('admin.blogs.edit',2)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a>"

        ],
        [
            "Private Classes",
            "<a href='{{route('admin.blogs.edit',3)}}'><i class='fas fa-pencil-alt ms-text-primary'></i></a>"
        ]
    ];
    var tablepackage = $('#data-table-18').DataTable( {
        data: dataSet18,
        columns: [
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
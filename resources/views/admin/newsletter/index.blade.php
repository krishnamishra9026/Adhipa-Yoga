@extends('layouts.admin')
@section('content')
    <div class="card">
    <div class="card-header">
        Update About Us
    </div>

    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <h6>Newsletter Subscriptions</h6>
            </div>
            
            <div class="ms-panel-body">

                <div class="table-responsive">
                    <table id="data-table-18" class="table table-striped thead-primary w-100"></table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    var dataSet18 = [

    @foreach($newsletters as $contact)
    [ "{{ @$no++ }}" ,"{{ $contact->email }}"],
    @endforeach
    ];
    var tablepackage = $('#data-table-18').DataTable( {
        data: dataSet18,
        columns: [
        { title: "Id" },
        { title: "Email" },
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
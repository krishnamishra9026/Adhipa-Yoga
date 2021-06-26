@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <h1>Booking</h1>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        Booking List
    
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Mobile No
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Start time
                        </th>
                        <th>
                            End time
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                    <tr data-entry-id="{{ $booking->id }}">
                        <td>

                        </td>
                        
                        <td>
                            {{ $booking->name ?? '' }}
                        </td>
                        <td>
                            {{ $booking->email ?? '' }}
                        </td>
                        <td>
                            {{ $booking->mobile_no ?? '' }}
                        </td>
                        <td>
                            {{ $booking->date ?? '' }}
                        </td>
                        <td>
                            {{ $booking->start_time ?? '' }}
                        </td>
                        <td>
                            {{ $booking->end_time ?? '' }}
                        </td>
                        <td>

                            <a class="btn btn-xs btn-primary" href="{{ route('admin.lessons.show', $booking->id) }}">
                                {{ trans('global.view') }}
                            </a>



                            <a class="btn btn-xs btn-info" href="{{ route('admin.lessons.edit', $booking->id) }}">
                                {{ trans('global.edit') }}
                            </a>


                            <form action="{{ route('admin.lessons.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], [])
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.lessons.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Lesson:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
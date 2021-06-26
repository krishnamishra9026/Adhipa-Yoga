@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Booking Data
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.booking.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    
                    <tr>
                        <th>
                            {{ 'Id' }}
                        </th>
                        <td>
                            {{ $booking->id  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Package Id' }}
                        </th>
                        <td>
                            {{ $booking->package_id  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Package Timing Id' }}
                        </th>
                        <td>
                            {{ $booking->package_timing_id  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Name' }}
                        </th>
                        <td>
                            {{ $booking->name  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Email' }}
                        </th>
                        <td>
                            {{ $booking->email  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Mobile No' }}
                        </th>
                        <td>
                            {{ $booking->mobile_no  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Start Date' }}
                        </th>
                        <td>
                            {{ $booking->start_date  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Start Time' }}
                        </th>
                        <td>
                            {{ $booking->start_time  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'End Time' }}
                        </th>
                        <td>
                            {{ $booking->end_time  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Package Details' }}
                        </th>
                        <td>
                            {{ $booking->package_details  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Transaction Id' }}
                        </th>
                        <td>
                            {{ $booking->transaction_id  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Currency Code' }}
                        </th>
                        <td>
                            {{ $booking->currency_code  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Payment Status' }}
                        </th>
                        <td>
                            {{ $booking->payment_status  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Invoice Id' }}
                        </th>
                        <td>
                            {{ $booking->invoice_id  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Date' }}
                        </th>
                        <td>
                            {{ $booking->date  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Status' }}
                        </th>
                        <td>
                            {{ $booking->status  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Created At' }}
                        </th>
                        <td>
                            {{ $booking->created_at  }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ 'Updated At' }}
                        </th>
                        <td>
                            {{ $booking->updated_at  }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.lessons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
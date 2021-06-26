<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['package_id','package_timing_id','name','email','mobile_no','start_date','start_time','end_time','package_details','transaction_id','currency_code','payment_status','invoice_id'];
}

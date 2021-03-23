<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable = [
        'user_id', 'message',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}

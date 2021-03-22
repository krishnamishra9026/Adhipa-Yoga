<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $table = "packages";
    protected $fillable = ['name','sort','workout_days', 'price', 'validity', 'description','status','image','no_of_classes'];
    public $timestamps = true;
}

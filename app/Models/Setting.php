<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name','site_title','site_description','contact_name','mobile','email','country','state','city','Address'];

}

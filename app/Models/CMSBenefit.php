<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMSBenefit extends Model
{
    protected $table = "cms_benefits";
    protected $fillable = ['name','image','image2','image3','image4'];
}

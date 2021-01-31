<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','name','title_arabic','description','description_arabic','image','image_popup'];
}

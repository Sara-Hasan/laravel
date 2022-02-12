<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_course',
        'desc_course',
        'image_course',
        'houre_course',
        'price_course'
    ];

}

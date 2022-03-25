<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;
    protected $table = 'course_users';
    protected $fillable = [
        'instructor_name',
        'Link',
        'Houre_of_lesson',
        'Arabic_Level',
        'days',
        'course_id',
        'order_id',
    ];
}

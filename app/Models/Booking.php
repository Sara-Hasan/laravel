<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'Card_Number',
        'Name_on_card',
        'Expiration',
        'Cvv',
        'total',
        'user_id',
        'phone',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'Card_Number',
        'Name_on_card',
        'Expiration',
        'Cvv',
        'total',
        'user_id',
        'course_id',
    ];
    public function course()
    {
        return $this->belongsToMany(Booking::class,'course_users');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CheckoutController extends Controller
{
    public function index()
    {
        $booking = DB::table('bookings')->Where('user_id', Auth::user()->id)->get();
        // $course = Course::find('course_id')->course;
        // dd($course);
        return view ('dashboard.user.myinfocourse',compact('booking'));
    }
}

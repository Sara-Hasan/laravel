<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        // $booking = DB::table('booking')->get();
        return view ('dashboard.user.booking');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Card_Number'=>'required',
            'Expiration'=>'required',
            'Name_on_card'=>'required',
            'Cvv'=>'required',
        ]);
            $courses = new Booking([
                'Card_Number' => $request->Card_Number,
                'Expiration' => $request->Expiration,
                'Name_on_card' => $request->Name_on_card,
                'Cvv' => $request->Cvv,
                'user_id' => Auth::user()->id,
                'course_id' => 
            ]);
        $courses->save();
        return redirect()->route('admin.course.index')
        ->with('success','Inserting successfully');
    }
}

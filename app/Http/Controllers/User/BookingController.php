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
        $booking = DB::table('bookings')->get();
        return view ('dashboard.user.checkout',compact('booking'));
    }
    public function create()
    {
        return view('dashboard.user.checkout');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Card_Number'=>'required',
            'Expiration'=>'required',
            'Name_on_card'=>'required',
            'Cvv'=>'required',
        ]);
            $booking = new Booking([
                'Card_Number' => $request->Card_Number,
                'Expiration' => $request->Expiration,
                'Name_on_card' => $request->Name_on_card,
                'Cvv' => $request->Cvv,
                'user_id' => Auth::user()->id,
                'course_id' => $request->course_id,
                'total' => $request->total,
            ]);
        $booking->save();
        return redirect()->route('user.mycourse')
        ->with('success','Inserting successfully');
    }
}

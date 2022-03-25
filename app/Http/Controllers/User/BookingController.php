<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            $input = $request->all();
            $input['user_id'] = Auth::user()->id;
            Booking::create($input);
            if(Session::has(Auth::guard()->user()->id.'courses')){
                Session::push(Auth::guard()->user()->id.'courses', $input);
            }else{
                Session::put(Auth::guard()->user()->id.'courses', []);
                Session::push(Auth::guard()->user()->id.'courses', $input);
            }
            if(Session::has('cart_items')){
                Session::put('cart_items', Session::get('cart_items')+1);
            }else{
                Session::put('cart_items', 1);
            }
        // $input->save();
        return redirect()->route('user.mycourse.index')
        ->with('success','Inserting successfully');
    }
}

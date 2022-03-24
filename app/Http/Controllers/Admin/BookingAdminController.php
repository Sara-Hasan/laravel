<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingAdminController extends Controller
{
    public function index()
    {
        $booking = DB::table('bookings')->get();
        return view ('dashboard.admin.booking', compact('booking'));
    }
    public function show(Course $booking)
    {
        return view('dashboard.admin.editbooking', compact('booking'));
    }
    public function edit($booking_id)
    {
        $booking= Booking::find($booking_id);
        return view('dashboard.admin.editbooking', compact('booking'));     
    }
    public function update(Request $request, $booking_id)
    {
        $request->validate([
            'total'=>'required',
            'course_id'=>'required',
            'phone'=>'required',
        ]);
        $booking= Booking::find($booking_id);
        $booking->total = $request->total;
        $booking->course_id = $request->course_id;
        $booking->phone = $request->phone;

        $booking->update();
        return redirect()->route('admin.book.index')
        ->with('success','instructor has been updated successfully.'); 
    }
    
    public function destroy(Course $booking_id)
    {
        $booking = Booking::find($booking_id);
       $booking->delete();
       return redirect()->route('admin.book.index');
        // $instructors->delete();
        // DB::delete('delete from booking where id = ?',[$booking_id]);
        // return redirect()->route('admin.course.index')
        // ->with('success','course has been deleted successfully');
    }
}

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
        
        // $instructors = Instructor::find($id);
     if($request->image_course != ''){        
          $path = public_path().'\storage\\';

        //   //code for remove old file
          if($booking->image_course != ''  && $booking->image_course != null){
               $file_old = $path.$booking->image_course;
               unlink($file_old);
          }

          //upload new file
          $file = $request->image_course;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);
         
          $booking->name_course = $request->name_course;
          $booking->desc_course = $request->desc_course;
         $booking->image_course = $filename;
          $booking->houre_course = $request->houre_course;
          $booking->price_course = $request->price_course;
        // $instructor = $request->all();
        // var_dump($instructors);

          //for update in table
          $booking->update(['file' => $filename]);
     }
     $booking->update();
        return redirect()->route('admin.course.index')
        ->with('success','instructor has been updated successfully.'); 
    }
    
    public function destroy(Course $booking_id)
    {
        $booking = Course::find($booking_id);
       $booking->delete();
       return redirect()->route('admin.course.index');
        // $instructors->delete();
        // DB::delete('delete from booking where id = ?',[$booking_id]);
        // return redirect()->route('admin.course.index')
        // ->with('success','course has been deleted successfully');
    }
}

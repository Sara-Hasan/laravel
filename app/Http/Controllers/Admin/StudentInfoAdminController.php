<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInfoAdminController extends Controller
{
    public function index()
    {
        $info = DB::table('course_users')->get();
        $instructors = DB::table('instructors')->get();
        $course = DB::table('courses')->get();
        return view ('dashboard.admin.studentInfo', compact('info','instructors','course'));
    }
    public function create()
    {
        return view('dashboard.admin.studentInfo', compact('info','instructors','course'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'instructor_name'=>'required',
            'Link'=>'required',
            'Houre_of_lesson'=>'required',
            'Arabic_Level'=>'required',
            'days'=>'required',
            'course_id'=>'required',
            'order_id'=>'required',
        ]);
            $info = new CourseUser([
                'instructor_name' => $request->instructor_name,
                'Link' => $request->Link,
                'Houre_of_lesson' => $request->Houre_of_lesson,
                'Arabic_Level' => $request->Arabic_Level,
                'days' => $request->days,
                'course_id' => $request->course_id,
                'order_id' => $request->order_id,
            ]);
            // dd($info);
        $info->save();
        return redirect()->route('admin.stuinfo.index')
        ->with('success','Inserting successfully');
    }
    public function show(CourseUser $info)
    {
        $instructors = DB::table('instructors')->get();
        $course = DB::table('courses')->get();
        return view('dashboard.admin.editstuinfo', compact('info','instructors','course'));
    }
    public function edit($info_id)
    {
        $info= CourseUser::find($info_id);
        $instructors = DB::table('instructors')->get();
        $course = DB::table('courses')->get();
        return view('dashboard.admin.editstuinfo', compact('info','instructors','course'));     
    }
    public function update(Request $request, $info_id)
    {
        $request->validate([
            'instructor_name'=>'required',
            'Link'=>'required',
            'Houre_of_lesson'=>'required',
            'Arabic_Level'=>'required',
            'days'=>'required',
            'course_id'=>'required',
            'order_id'=>'required',
        ]);
        $info= CourseUser::find($info_id);
        
         
          $info->instructor_name = $request->instructor_name;
          $info->Link = $request->Link;
          $info->Houre_of_lesson = $request->Houre_of_lesson;
          $info->Arabic_Level = $request->Arabic_Level;
          $info->days = $request->days;
          $info->order_id = $request->order_id;
          $info->course_id = $request->course_id;
    
     $info->update();
        return redirect()->route('admin.stuinfo.index')
        ->with('success','instructor has been updated successfully.'); 
    }
    
    public function destroy(CourseUser $info_id)
    {
        $info = CourseUser::find($info_id);
       $info->delete();
       return redirect()->route('admin.stuinfo.index');
        // $instructors->delete();
        // DB::delete('delete from info where id = ?',[$info_id]);
        // return redirect()->route('admin.course.index')
        // ->with('success','course has been deleted successfully');
    }
}

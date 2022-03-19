<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

class CourseAdminController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        $instructor = Instructor::all();
        return view ('dashboard.admin.course', compact('courses','instructor'));
    }
    public function create()
    {
        return view('dashboard.admin.course', compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_course'=>'required',
            'desc_course'=>'required',
            'houre_course'=>'required',
            'price_course'=>'required',
            'image_course' => 'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        if ($request->hasFile('image_course')) {
            $file = $request->image_course;
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $courses = new Course([
                'name_course' => $request->name_course,
                'desc_course' => $request->desc_course,
                'image_course' => $filename,
                'houre_course' => $request->houre_course,
                'price_course' => $request->price_course
            ]);
        }
        $courses->save();
        return redirect()->route('admin.course.index')
        ->with('success','Inserting successfully');
    }
    public function show(Course $courses)
    {
        return view('dashboard.admin.editcourse', compact('courses'));
    }
    public function edit($courses_id)
    {
        $courses= Course::find($courses_id);
        return view('dashboard.admin.editcourse', compact('courses'));     
    }
    public function update(Request $request, $courses_id)
    {
        $request->validate([
            'name_course'=>'required',
            'desc_course'=>'required',
            'houre_course'=>'required',
            'price_course'=>'required',
            'image_course' => 'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        $courses= Course::find($courses_id);
        
        // $instructors = Instructor::find($id);
     if($request->image_course != ''){        
          $path = public_path().'\storage\\';

        //   //code for remove old file
          if($courses->image_course != ''  && $courses->image_course != null){
               $file_old = $path.$courses->image_course;
               unlink($file_old);
          }

          //upload new file
          $file = $request->image_course;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);
         
          $courses->name_course = $request->name_course;
          $courses->desc_course = $request->desc_course;
         $courses->image_course = $filename;
          $courses->houre_course = $request->houre_course;
          $courses->price_course = $request->price_course;
        // $instructor = $request->all();
        // var_dump($instructors);

          //for update in table
          $courses->update(['file' => $filename]);
     }
     $courses->update();
        return redirect()->route('admin.course.index')
        ->with('success','instructor has been updated successfully.'); 
    }
    
    public function destroy(Course $courses_id)
    {
        // $instructors->delete();
        DB::delete('delete from courses where id = ?',[$courses_id]);
        return redirect()->route('admin.course.index')
        ->with('success','course has been deleted successfully');
    }


}

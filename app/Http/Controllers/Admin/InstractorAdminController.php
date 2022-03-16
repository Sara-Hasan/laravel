<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstractorAdminController extends Controller
{
    public function index()
    {
        // $instructor = Instructor::all();
        $instructor = DB::table('instructors')->get();
        return view ('dashboard.admin.instructor', compact('instructor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.instructor', compact('instructor'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required|min:10',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'image' => 'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $instructor = new Instructor([
                'name' => $request->name,
                'phone' => $request->phone,
                'image' => $filename,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
            // $user->name = $request->name;
            // $user->phone = $request->phone;
            // $user->email = $request->email;
            // $user->password = Hash::make($request->password);
        $instructor->save();
        return redirect()->route('admin.tech.index')
        ->with('success','Inserting successfully');
    }
    public function show(Instructor $instructors)
    {
        return view('dashboard.admin.editinstractor', compact('instructors'));
    }
    public function edit($instructor_id)
    {
        $instructor= Instructor::find($instructor_id);
        return view('dashboard.admin.editinstractor', compact('instructor'));     
    }
    public function update(Request $request, $instructor_id)
    {
        $request->validate([
            'name',
            'phone',
            'email',
            'password'=>'min:5',
            'image' => 'mimes:jpg,jpeg,png|max:5000',
        ]);
        $instructor= Instructor::find($instructor_id);
        
        // $instructors = Instructor::find($id);
     if($request->image != ''){        
          $path = public_path().'\storage\\';

        //   //code for remove old file
          if($instructor->image != ''  && $instructor->image != null){
               $file_old = $path.$instructor->image;
               unlink($file_old);
          }

          //upload new file
          $file = $request->image;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);
         
          $instructor->name = $request->name;
          $instructor->phone = $request->phone;
         $instructor->image = $filename;
          $instructor->email = $request->email;
          $instructor->password = $request->password;
        // $instructor = $request->all();
        // var_dump($instructors);

          //for update in table
          $instructor->update(['file' => $filename]);
     }
     $instructor->update();
        return redirect()->route('admin.tech.index')
        ->with('success','instructor has been updated successfully.'); 
    }
    
    public function destroy(Instructor $instructor_id)
    {
        // $instructors->delete();
        DB::delete('delete from instructors where id = ?',[$instructor_id]);
        return redirect()->route('admin.tech.index')
        ->with('success','instructor has been deleted successfully');
    }

}

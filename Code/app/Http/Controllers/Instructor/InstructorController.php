<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{

    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:instructors,email',
            'phone'=>'required|min:10',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $instructor = new Instructor();
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->phone = $request->phone;
        $instructor->password = Hash::make($request->password);
        $save = $instructor->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
  }

    function check(Request $request){
        //Validate Inputs
      $request->validate([
          "email"=>'required|email|exists:instructors,email',
          "password"=>'required|min:5|max:30'
      ],[
      'email.exists'=>'This email is not exists in instructor table'
      ]);

      $creds = $request->only('email','password');
      if( Auth::guard('instructor')->attempt($creds) ){
          return redirect()->route('instructor.home');
      }else{
          return redirect()->route('instructor.login')->with('fail','Incorrect credentials');
      }
  }

  function logout(){
      Auth::guard('instructor')->logout();
      return redirect('/');
  }
}

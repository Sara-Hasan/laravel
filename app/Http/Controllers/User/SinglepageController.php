<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglepageController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        return view ('dashboard.user.singlepage', compact('courses'));
    }
    public function show(Course $courses)
    {
        return view('dashboard.user.singlepage', compact('courses'));
    }
    public function view($id)
    {
        $courses= Course::find($id);
        return view('dashboard.user.singlepage', compact('courses'));     
    }
   
}

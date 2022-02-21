<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseAdminController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        return view ('dashboard.admin.course', compact('courses'));
    }
}

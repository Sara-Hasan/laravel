<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInfoAdminController extends Controller
{
    public function index()
    {
        $info = DB::table('course_users')->get();
        return view ('dashboard.admin.studentInfo', compact('info'));
    }
}

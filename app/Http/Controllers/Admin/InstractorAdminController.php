<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InstractorAdminController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $instructors = DB::table('instructors')->get();
        return view ('dashboard.admin.instructor', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.instructor', compact('instructors'));
    }
}

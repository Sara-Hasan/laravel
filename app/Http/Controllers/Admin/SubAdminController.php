<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    public function index()
    {
        $subadmin = DB::table('admins')->get();
        return view ('dashboard.admin.subadmin', compact('subadmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.subadmin', compact('subadmin'));
    }
}

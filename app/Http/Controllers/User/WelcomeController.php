<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function select()
    {
        $courses = DB::table('courses')->get();
        return view('welcome',compact('courses'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $id =  Auth::guard('web')->user()->id;
        echo $id;
        $users= User::find($id);
        // $users = DB::table('users')->get($id);
        return view('dashboard.user.home', compact('users'));  
    }
}

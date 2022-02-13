<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view ('dashboard.admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.user', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required|min:10',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\User  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        return view('dashboard.admin.edituser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        return view('dashboard.admin.edituser', compact('users'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_exam' => 'required|mimes:jpg,jpeg,png|max:5000',
            'time' => 'required',
        ]);
        $users->name = $request->name;
        $users->description = $request->description;
        $users->image_exam = $request->image_exam;
        $users->time = $request->time;

        $users->save();
        return redirect()->route('admin.user.index')
        ->with('success','exam has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\User  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        //
    }

}

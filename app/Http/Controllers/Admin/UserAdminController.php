<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        $users = DB::table('users')->get();
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
            return redirect()->back()->with('success','Inserting successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to imserting');
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
    public function edit(User $user)
    {
        return view('dashboard.admin.edituser', compact('user'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name',
            'phone'=>'min:10',
            'email',
            'password'=>'min:5',
            'image' => 'required|mimes:jpg,jpeg,png|max:5000',
        ]);
        if($request->image != ''){        
            $path = public_path().'storage/';
  
        //code for remove old file
        if($user->image != ''  && $user->image != null){
                $file_old = $path.$user->image;
                unlink($file_old);
        }
        //upload new file
        $file = $request->image;
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update(['file' => $filename]);
    }
        $user->save();
        return redirect()->route('admin.user.index')
        ->with('success','exam has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\User  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')
        ->with('success','exam has been deleted successfully');
    }

}

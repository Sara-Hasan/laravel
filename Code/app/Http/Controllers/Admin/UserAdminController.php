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
        $user = User::all();
        // $user = DB::table('users')->get();
        return view ('dashboard.admin.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.user', compact('user'));
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
            'image' => 'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $user = new User([
                'name' => $request->name,
                'phone' => $request->phone,
                'image' => $filename,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
            // $user->name = $request->name;
            // $user->phone = $request->phone;
            // $user->email = $request->email;
            // $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.user.index')
        ->with('success','Inserting successfully');
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
            'phone',
            'email',
            'password'=>'min:5',
            'image' => 'mimes:jpg,jpeg,png|max:5000',
        ]);
     if($request->image != ''){        
          $path = public_path().'\storage\\';

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
          $user->image = $filename;
          $user->email = $request->email;
          $user->password = $request->password;

          //for update in table
        //   $user->update(['file' => $filename]);
     }
     $user->save();
        return redirect()->route('admin.user.index')
        ->with('success','user has been updated successfully.'); 
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
        ->with('success','user has been deleted successfully');
    }

}

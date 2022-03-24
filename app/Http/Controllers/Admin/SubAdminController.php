<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $subadmin = new Admin([
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
        $subadmin->save();
        return redirect()->route('admin.subadmin.index')
        ->with('success','Inserting successfully');
    }
    public function show(Admin $subadmin)
    {
        return view('dashboard.admin.editsubadmin', compact('subadmin'));
    }
    public function edit($subadmin_id)
    {
        $subadmin= Admin::find($subadmin_id);
        return view('dashboard.admin.editsubadmin', compact('subadmin'));     
    }
    public function update(Request $request, $subadmin_id)
    {
        $request->validate([
            'name',
            'phone',
            'email',
            'password'=>'min:5',
            'image' => 'mimes:jpg,jpeg,png|max:5000',
        ]);
        $subadmin= Admin::find($subadmin_id);
        
        // $subadmins = subadmin::find($id);
     if($request->image != ''){        
          $path = public_path().'\storage\\';

        //   //code for remove old file
          if($subadmin->image != ''  && $subadmin->image != null){
               $file_old = $path.$subadmin->image;
               unlink($file_old);
          }

          //upload new file
          $file = $request->image;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);
         
          $subadmin->name = $request->name;
          $subadmin->phone = $request->phone;
          $subadmin->image = $filename;
          $subadmin->email = $request->email;
          $subadmin->password = $request->password;
        // $subadmin = $request->all();
        // var_dump($subadmins);

          //for update in table
          $subadmin->update(['file' => $filename]);
     }
     $subadmin->update();
        return redirect()->route('admin.subadmin.index')
        ->with('success','subadmin has been updated successfully.'); 
    }
    
    public function destroy(Admin $subadmin_id)
    {
        // $subadmins->delete();
        DB::delete('delete from subadmins where id = ?',[$subadmin_id]);
        return redirect()->route('admin.subadmin.index')
        ->with('success','subadmin has been deleted successfully');
    }

}

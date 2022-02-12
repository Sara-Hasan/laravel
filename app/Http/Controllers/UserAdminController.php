<?php

namespace App\Http\Controllers;

use App\Models\Admin\UserAdmin;
use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = User::all();
        return view ('dashboard.admin.user', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdmin $userAdmin)
    {
        //
    }
}

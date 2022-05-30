<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if($user->status == true){
            $user->update(['status' => false]);
        }else{
            $user->update(['status' => true]);
        }
        toastr()->warning('User Status Updated Successfully');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request);
        if($request->allow){
            $user->update(['badge'=>true, 'badge_status'=>'2']);
            toastr()->success('Badge Allowed');
            return redirect()->back();
        }elseif($request->deny){
            $user->update(['badge'=>false, 'badge_status'=>'3']);
            toastr()->warning('Badge Not Allowed');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        toastr()->error('User Deleted Successfully');
        return redirect()->back();
    }
    public function badgeRequest()
    {
        $users = User::where('badge_status', 1)->get();
        return view('admin.user.badgeRequest')->with('users', $users);
    }
    
    public function deniedRequest()
    {
        $users = User::where('badge_status', 3)->get();
        return view('admin.user.requestDenied')->with('users', $users);
    }
    public function showPosts(User $user)
    {
        return view('admin.user.posts')->with('user', $user);
    }
   
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function verify($code)
    {
        
        $user = User::where('code',$code)->first();
        if($user){
            return view('forget')->with('user',$user);
        }
    }
    public function verifyEmail($id)
    {
        
        $user = User::where('id',$id)->first();
        if($user){
            return view('veify')->with('user',$user);
        }
    }
    public function clickToVerify(User $user)
    {
        $user->update(['email_verify'=>true,]);
        echo 'Email Verified Successfully! wait for Briefify support to check your documents and varify your account.';
    }

    public function resetPassword(Request $request, User $user){
        $user->update(['password'=>$request->password,'code'=>null]);
        echo 'Password Changed Successfully';
    }
}

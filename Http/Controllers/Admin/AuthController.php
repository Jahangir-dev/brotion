<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->remember == 'on' ? true : false;
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            toastr()->error('Incorrect email or password');
            return redirect()->back()->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}

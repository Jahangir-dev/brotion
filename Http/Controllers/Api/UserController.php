<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        $user = Auth::user();
        return Api::setResponse('user', $user);
    }
    public function updateUser(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return Api::setResponse('user', $user);
    }

    public function getprofile(Request $request)
    {
        $user = User::find($request->user_id);
        $response = new Api();
        $response->add('user', $user->withToken());
        return $response->json();
    }

    public function notificationFlag(){
        $user = Auth::user();
        if ($user->notification_flag == true) {
            $user->update(['notification_flag'=>false]);
            return Api::setMessage('Notifications Muted Successfully');
        }
        else{
            $user->update(['notification_flag'=>true]);
            return Api::setMessage('Notifications Are Turned On Successfully');
        }
    }
}

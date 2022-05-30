<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function followUser(Request $request){
        $check = Follow::where('user_id',Auth::user()->id)->where( 'opponent_id',$request->opponent_id)->first();
        if ($check) {
           return Api::setMessage('Already Following');
        }else{
            Follow::create([
                'user_id' => Auth::user()->id,
                'opponent_id' => $request->opponent_id,
            ]);
            return Api::setMessage('Start Following this User');
        }
       
    }

    public function followers(Request $request)
    {
        $user = User::find($request->user_id);
        $followers = $user->followers->pluck('user_id');
        $users = User::whereIn('id',$followers)->get();
        return Api::setResponse('followers', $users);
    }

    public function following(Request $request)
    {
        $user = User::find($request->user_id);
        $following = $user->following->pluck('opponent_id');
        $users = User::whereIn('id',$following)->get();
        return Api::setResponse('following', $users);
    }

    public function unFollowing(Request $request){
        $following = Follow::where('user_id',Auth::user()->id)->where( 'opponent_id',(int)$request->opponent_id)->first();
        if ($following==null) {
            return Api::setMessage('Already Unfollowed');
         }else{
            $following->delete();
            return Api::setMessage('Successfully Unfollowed');
         }
    }
}

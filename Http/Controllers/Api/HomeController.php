<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $verified_users_ids = User::where('badge_status', 2)->pluck('id');
        $followers = $user->following->pluck('opponent_id');
        $followers[] = $user->id;
        $merged = $verified_users_ids->merge($followers);
        $ids = $merged->unique();
        $posts = Post::whereIn('user_id', $ids)->latest()->paginate(300);
        return Api::setResponse('posts', $posts);
    }
}

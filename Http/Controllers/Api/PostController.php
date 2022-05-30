<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Post;
use App\Models\PostDislike;
use App\Models\PostLike;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post =  Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => (int)$request->category_id,
        ] + $request->all());

        $notification = Notification::create([
            'title' => "New Post",
            'body' => $post->heading,
        ]);
        $followers = Auth::user()->followers->pluck('user_id');
        $users = User::findMany($followers);

        foreach ($users as $user) {
            if ($user->notification_flag) {

                $notification->update([
                    'firebase_token' => $user->firebase_token,
                    'user_id'        => $user->id,
                ]);

                $notification->send();
            }
        }
        return Api::setResponse('post', $post);
    }

    public function likePost(Request $request)
    {
        $like = PostLike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();
        $dislike = PostDislike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();
        if ($dislike) {
            $dislike->delete();
        }
        if ($like) {
            return Api::setMessage('Post was already Liked');
        } else {
            PostLike::create([
                'post_id' => $request->post_id,
                'user_id' => Auth::user()->id,
            ]);
            return Api::setMessage('Post Liked');
        }
    }


    public function unlikePost(Request $request)
    {
        $like = PostLike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();

        if ($like) {
            $like->delete();
            return Api::setMessage('Post Unliked');
        } else {
            return Api::setMessage('Post already Unliked');
        }
    }

    public function dislikePost(Request $request)
    {
        $like = PostLike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();
        $dislike = PostDislike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();
        if ($like) {
            $like->delete();
            if ($dislike) {
                return Api::setMessage('Post was already Disliked');
            } else {
                PostDislike::create([
                    'post_id' => $request->post_id,
                    'user_id' => Auth::user()->id,
                ]);
                return Api::setMessage('Post Disliked');
            }
        } else {
            if ($dislike) {
                return Api::setMessage('Post was already Disliked');
            } else {
                PostDislike::create([
                    'post_id' => $request->post_id,
                    'user_id' => Auth::user()->id,
                ]);
                return Api::setMessage('Post Disliked');
            }
        }
    }


    public function removeDislikePost(Request $request)
    {
        $dislike = PostDislike::where('post_id', $request->post_id)->where('user_id', Auth::user()->id)->first();

        if ($dislike) {
            $dislike->delete();
            return Api::setMessage('Post Dislike Removed');
        } else {
            return Api::setMessage('Post already Disliked');
        }
    }

    public function getPost()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return Api::setResponse('posts', $posts);
    }

    public function deletePost(Request $request)
    {
        $post = Post::where('id', $request->post_id)->first();
        $post->delete();
        return Api::setMessage('Post Deleted Successfully');
    }

    public function userPost(Request $request)
    {
        $user   = User::find($request->user_id);
        $posts  =  $user->posts()->paginate();

        return Api::setResponse('posts', $posts);
    }
    public function searchByCategory(Request $request)
    {
        $posts = Post::where('category_id', $request->category_id)->latest()->paginate(30);
        return Api::setResponse('posts', $posts);
    }
    public function searchPost(Request $request)
    {
        $posts = Post::where('heading', 'LIKE','%' .$request->statement. '%')
        ->orwhereHas('user', function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->statement . '%');
            })->latest()->paginate(30);
        return Api::setResponse('posts', $posts);
    }
}

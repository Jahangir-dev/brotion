<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentStore(Request $request)
    {
        $comment = PostComment::create([
            'post_id' => (int)$request->post_id,
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
        ]);

        return Api::setResponse('comment', $comment);
    }
    public function deleteComment(Request $request){
        $user = Auth::user();
        $comment =PostComment::where('id',$request->comment_id)->first();
        if($comment->user_id == $user->id){
            $comment->delete();
            return Api::setMessage("Comment Deleted Successfully");
        }
        else{
            return Api::setMessage("Don't Have Access to Delete this Comment");
        }
    }

    public function postComments(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->comments;
        return Api::setResponse('post', $post);
    }
    public function replyStore(Request $request)
    {
        $reply = Reply::create(['user_id'=>Auth::user()->id,'post_comment_id'=>(int)$request->post_comment_id,'text'=>$request->text]);
        return Api::setResponse('reply', $reply);
    }
    public function getReplies(Request $request)
    {
        $replies = Reply::where('post_comment_id', $request->comment_id)->get();
        return Api::setResponse('replies', $replies);
    }
}

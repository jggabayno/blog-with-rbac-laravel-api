<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostCommentRequest;
use App\Models\Post;
// use App\Mail\PostLiked;

use App\Models\User;

use App\Notifications\PostCommentNotification;

class PostCommentController extends Controller
{
    public function store(Post $post, PostCommentRequest $request)
    {
        $postCommented =  $post->comments()->create(['user_id' => auth()->user()->id,'body' => $request->body]);

        $query = $postCommented->with('commenter')->where('id',$postCommented->id)->first();

        User::where('id',$post->user_id)->first()->notify(new PostCommentNotification($query));

        return $query;

    }

     public function destroy(Post $post) {
        auth()->user()->comments()->where('post_id', $post->id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
// use App\Mail\PostLiked;

use Illuminate\Support\Facades\Mail;

class PostLikeController extends Controller
{
    public function store(Post $post)
    {

        if($post->likedBy(auth()->user()))  {
            return response(null,409);
        }

        $post->likes()->create([
            'user_id' => auth()->user()->id
        ]);

        // if (!$post->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()) {
        //     // Mail::to($post->user)->send(new PostLiked(auth()->user(), $post));
        // }

    }

     public function destroy(Post $post) {
        auth()->user()->likes()->where('post_id', $post->id)->delete();
    }

}

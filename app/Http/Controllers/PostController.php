<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return Post::latest()->with(['user', 'likes.liker','comments.commenter',])->get();
    }

    public function store(PostRequest $request)
    {
        $query = $request->user()->posts()->create(['body' => $request->body]);
        return response()->json($request->user()->posts()->where('id', $query->id)->with(['user', 'likes','comments'])->first(), 201);
    }

    public function update(Post $post,PostRequest $request)
    {
        $request->user()->posts()->where('id', $post->id)->update(['body' => $request->body]);
        return response()->json($selectedPost->first(), 200);
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->posts()->where('user_id', $post->user_id)) {
            $post->delete();
            return response()->json($post->id,200);
        }
    }

}

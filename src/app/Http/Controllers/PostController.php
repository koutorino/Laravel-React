<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
// createじゃ何故かうごかなかった。
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return response()->json(Post::all());
    }

    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update(Int $id, Request $request)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->updated_at = now();
        $post->save();
        return response()->json($post);
    }

    public function destroy(Int $id)
    {
        $post = Post::find($id)->delete();
        return response()->json(Post::all());
    }
}

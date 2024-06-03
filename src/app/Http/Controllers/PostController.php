<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
  // createじゃ何故かうごかなかった。
  public function store(Request $request)
  {
    //タイトルとコメントの処理
    $post = new Post();
    $title = $request->input('title');
    $content = $request->input('content');
    // $post->created_at = now();
    // $post->updated_at = now();
    // return response()->json(Post::all());

    //画像の処理
    $file = $request->file('file');
    $path = Storage::disk('s3')->putFile('/', $file, 'public');
    $path = Storage::disk('minio')->url($path);
    $pathArray = explode('/', $path);
    $pathArray[2] = 'localhost:9000';
    $newPathArray = implode('/', $pathArray);

    Post::insert([
      'title' => $title,
      'content' => $content,
      'image' => $newPathArray,
    ]);

    return redirect('/');
  }

  public function index()
  {
    $posts = Post::all();
    return response()->json($posts);
  }

  public function show($id)
  {
    $post = Post::where('id', 6)->first();
    return view('show',compact('post'));
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

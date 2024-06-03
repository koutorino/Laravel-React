<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotController extends Controller
{
    public function upload(Request $request)
{
    $file = $request->file('file');

    // s3を使用した場合
    $path = Storage::disk('s3')->putFile('/', $file, 'public');
    $path = Storage::disk('minio')->url($path);
    $pathArray = explode('/', $path);
    $pathArray[2] = 'localhost:9000';
    $newPathArray = implode('/', $pathArray);

    // webサーバを使用した場合
    // $path = Storage::put('/public', $file);
    // $path = explode('/', $path);

    Post::insert([
        'image' => $newPathArray,
    ]);

    return redirect('/');
}

    public function show()
    {
        $memo = Post::where('id', 6)->first();
        return view('show',compact('memo'));
    }
}

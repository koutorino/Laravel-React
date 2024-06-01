<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FindDirectoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $path = 'develop';
        // $directories = Storage::disk('s3')->directories($path);
        // return response()->json([
        //     'path'      => $path,
        //     'directories' => $directories,
        // ]);
        $path = Storage::disk('s3')->url('develop/wn5lRbZDFcAswVIxLkJiMiZFLDbmPdNub5t2mk7V.png');
        return view('app', compact('path'));
    }
}

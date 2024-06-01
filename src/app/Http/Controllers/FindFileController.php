<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FindFileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $path = '';
        $files = Storage::disk('s3')->files($path);
        return response()->json([
            'path'  => $path,
            'files' => $files,
        ]);
    }
}

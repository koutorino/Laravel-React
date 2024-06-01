<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DownloadFileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws FileNotFoundException
     */
    public function __invoke(Request $request)
    {
        $path = 'hello.json';
        $name = 'sample.txt';

        if (empty($path) || ! Storage::disk('s3')->exists($path)) {
            throw new FileNotFoundException('file is not exists.');
        }

        $file = Storage::disk('s3')->get($path);
        $last_modified = Storage::disk('s3')->lastModified($path);

        return response($file, 200, [
            'filename'            => $name,
            'Content-Type'        => 'text/plain',
            'Last-Modified'       => gmdate('D, d M Y H:i:s', $last_modified) . ' GMT',
            'Etag'                => md5($last_modified),
            'Content-Disposition' => 'attachment; filename="' . $name . '"',
        ]);
    }
}

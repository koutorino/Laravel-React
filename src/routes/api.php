<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['api']], function () {
        // Route::get('/directories', 'FindDirectoryController')->name('api.directories');
        // Route::get('/files', 'FindFileController')->name('api.files');
        // Route::get('/files/hello.json', 'DownloadFileController')->name('api.files.download');
        // Route::post('/files/upload', 'UploadFileController')->name('api.files.upload');
    });
});

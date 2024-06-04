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
    Route::post('/', 'PostController@store')->name('api.store');
    Route::get('/show', 'PostController@show')->name('api.show');
    Route::put('/update', 'PostController@update')->name('api.update');
    Route::post('/destroy', 'PostController@destroy')->name('api.destroy');
    Route::get('/like', 'LikesController@show')->name('api.like.show');
    Route::post('/like', 'LikesController@store')->name('api.like.store');
    Route::post('/like/destroy', 'LikesController@destroy')->name('api.like.destroy');
  });
});

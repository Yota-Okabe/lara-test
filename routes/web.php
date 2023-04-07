<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// get送信
// get送信で /tweets というURLリクエストが来た時、TweetController の indexメソッド(関数)を起動せよ
Route::get('/tweets', '\App\Http\Controllers\TweetController@index');
Route::get('/tweets/create', '\App\Http\Controllers\TweetController@create');
Route::post('/tweets', '\App\Http\Controllers\TweetController@store');
Route::get('/tweets/{id}', '\App\Http\Controllers\TweetController@show');
Route::delete('/tweets/{id}', '\App\Http\Controllers\TweetController@destroy');
Route::get('/tweets/{id}/edit', '\App\Http\Controllers\TweetController@edit');
Route::put('/tweets/{id}', '\App\Http\Controllers\TweetController@update');

Route::get('/comments', '\App\Http\Controllers\CommentController@index');
Route::get('/comments/create', '\App\Http\Controllers\CommentController@create');
Route::post('/comments', '\App\Http\Controllers\CommentController@store');
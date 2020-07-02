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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/','TopController@index');


Route::resource('posts', 'PostController');

if (env('APP_ENV') === 'local') {
   URL::forceScheme('https');
} 

//Route::get('/posts', 'PostController@index');
//Route::get('/posts/create', 'PostController@create');
//Route::post('/posts', 'PostController@store');

//画像をアップロードするページ
Route::get('/upload', 'ImageController@input');
//画像を保存したり画像名をDBに格納する部分
Route::post('/upload', 'ImageController@upload');
//保存した画像を表示するページ
Route::get('/output', 'ImageController@output');
//上記までを追記

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('posts/kids', 'KidsPostController');

if (env('APP_ENV') === 'local') {
   URL::forceScheme('https');
} 
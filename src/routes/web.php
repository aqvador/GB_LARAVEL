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

Route::get('/', fn() => view('users/welcome', ['title' => 'Главная страница']));
Route::get('/about', fn() => view('about', ['title' => 'О нас']));


Route::get('post/view/{id}', '\App\Http\Controllers\PostsController@view');
Route::get('post/create', '\App\Http\Controllers\PostsController@create');
Route::post('post/save', '\App\Http\Controllers\PostsController@save');
Route::get('post/update/{id}', '\App\Http\Controllers\PostsController@update');
Route::get('post/list/{limit?}', '\App\Http\Controllers\PostsController@list');

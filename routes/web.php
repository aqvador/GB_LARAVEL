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


Route::get('posts/{id}', '\App\Http\Controllers\PostsController@view');
Route::get('posts/list/{limit?}', '\App\Http\Controllers\PostsController@list');

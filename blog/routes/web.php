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


Route::get('list_post', 'PostController@index');

Route::get('create_post', 'PostController@create');
Route::post('postStore', 'PostController@store')->name('postStore');

Route::get('search_user', function () {
    return view('search_user');
});

Route::get('search', 'UserController@search')->name('search');


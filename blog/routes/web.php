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
Route::get('detail_post/{id}', 'PostController@show');
Route::get('delete/{id}', 'PostController@destroy');

Route::get('create_post', 'PostController@create');
Route::post('postStore', 'PostController@store')->name('postStore');

Route::get('search_user', function () {
    return view('search_user');
});
Route::get('search', 'UserController@search')->name('search');

Route::get('search_user2', function () {
    return view('search_user2');
});
Route::get('search2', 'UserController@search2')->name('search2');

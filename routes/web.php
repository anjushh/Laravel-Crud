<?php

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

// Route::resource('posts','PostController');

Route::get('/post','PostController@index')->name('posts.index');
Route::get('/create','PostController@create')->name('posts.create');
Route::get('/edit/{id}','PostController@edit')->name('posts.edit');
Route::get('/show/{id}','PostController@show')->name('posts.show');
Route::delete('/destroy/{id}','PostController@destroy')->name('posts.destroy');
Route::post('/store','PostController@store')->name('posts.store');
Route::patch('/update/{id}','PostController@update')->name('posts.update');
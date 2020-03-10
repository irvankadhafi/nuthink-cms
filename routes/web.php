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
Route::get('/',function (){
    return view('index');
});
Auth::routes();
Route::get('/board/posts/{post}', 'PostController@single');
Route::get('/board/home', 'HomeController@index')->name('home');
Route::get('/board', 'PostController@all');
Route::get('/board/admin/{any}', 'AdminController@index')->where('any', '.*');

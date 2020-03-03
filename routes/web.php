<?php


Auth::routes();
Route::get('/',function (){
   return view('index');
});
Route::get('/board/posts/{post}', 'PostController@single');
Route::get('/board/home', 'HomeController@index')->name('home');
Route::get('/board/', 'PostController@all');
Route::get('/board/admin/{any}', 'AdminController@index')->where('any', '.*');

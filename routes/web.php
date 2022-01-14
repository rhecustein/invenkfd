<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'BlogController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');
    Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kfd', function () {
    return view('kfd');
})->middleware(['auth'])->name('kfd');

require __DIR__.'/auth.php';

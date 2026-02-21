<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama saya Siti Mutmainah,
            NIM saya 244107020143';
});

//routes name
Route::get('/user/profile', function () {
    return 'Ini halaman profile';
})->name('profile');

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{article}/ids/{id}', function
($articleId, $idId) {
    return 'Halaman Artikel ke-'.$articleId." dengan ID: ".$idId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

//route group
Route::middleware([])->group(function () {

    Route::get('/latihan1', function () {
        return 'Ini halaman latihan 1';
    });

    Route::get('/latihan2', function () {
        return 'Ini halaman latihan 2';
    });

});

//route prefix
Route::prefix('admin')->group(function () {

    Route::get('/user', function () {
        return 'Halaman admin user';
    });

    Route::get('/post', function () {
        return 'Halaman admin post';
    });
});

//route redirect
Route::redirect('/here', 'there');

Route::get('/there', function () {
    return 'Anda berhasil dialihkan ke halaman there';
});

// view routes
Route::view('/welcome', 'welcome');
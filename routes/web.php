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

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

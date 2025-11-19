<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

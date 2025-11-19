<?php

use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Login Page (untuk testing frontend dulu)
    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('login');
    
    // Route untuk handle login POST (dummy dulu)
    Route::post('/login', function () {
        return redirect()->route('admin.login')->with('success', 'Login berhasil!');
    })->name('login.post');
});

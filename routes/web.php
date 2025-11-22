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
    // Login Page
    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('login');
    
    // Login POST - langsung redirect ke dashboard tanpa validasi
    Route::post('/login', function () {
        return redirect()->route('admin.dashboard');
    })->name('login.post');
    
    // Dashboard Page
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
    
    // Data Anggota Page
    Route::get('/anggota', function () {
        return view('admin.anggota.index');
    })->name('anggota');
    
    // Berita Routes
    Route::get('/berita', function () {
        return view('admin.berita.index');
    })->name('berita');
    
    Route::get('/berita/create', function () {
        return view('admin.berita.create');
    })->name('berita.create');
});

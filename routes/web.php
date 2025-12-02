<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\SitemapController;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Berita Public Routes
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Admin Authentication Routes (Public)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1') // Max 5 attempts per minute
        ->name('login.post');
});

// Admin Protected Routes
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/export-stats', [App\Http\Controllers\Admin\DashboardController::class, 'exportStats'])->name('export.stats');

    // Data Anggota
    Route::get('/anggota', function () {
        return view('admin.anggota.index');
    })->name('anggota');

    // Berita CRUD Routes (Resource Controller)
    Route::resource('berita', AdminBeritaController::class);
});

Route::get('/test', function () { return view('test'); });

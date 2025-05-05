<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file untuk mendefinisikan rute web aplikasi Laravel kamu.
| Route di bawah ini menggunakan controller resource dan route tambahan.
|
*/

// Halaman Beranda
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD Artikel
Route::resource('articles', ArticleController::class);

// CRUD Siswa
Route::resource('siswa', SiswaController::class);

// Cek Koneksi Database
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return response('✅ Connected to MySQL!', 200);
    } catch (\Exception $e) {
        return response('❌ Connection failed: ' . $e->getMessage(), 500);
    }
});

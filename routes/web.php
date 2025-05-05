<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SiswaController;

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD untuk Siswa
Route::resource('siswa', SiswaController::class);

// Cek koneksi database
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return response('✅ Connected to MySQL!', 200);
    } catch (\Exception $e) {
        return response('❌ Connection failed: ' . $e->getMessage(), 500);
    }
});

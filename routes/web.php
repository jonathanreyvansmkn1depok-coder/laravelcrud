<?php

use App\Http\Controllers\SiswaController; // Pastikan namespace-nya benar
use Illuminate\Support\Facades\Route;

// Ubah route '/' agar langsung menampilkan daftar siswa (opsional)
Route::get('/', [SiswaController::class, 'index']);

// Route resource untuk semua fungsi CRUD siswa
Route::resource('siswa', SiswaController::class);
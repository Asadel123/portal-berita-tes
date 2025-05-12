<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

// Halaman utama untuk menampilkan daftar berita
Route::get('/', [BeritaController::class, 'index'])->name('home');

// Halaman detail berita berdasarkan ID
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

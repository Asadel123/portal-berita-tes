<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeritaController::class, 'index']);

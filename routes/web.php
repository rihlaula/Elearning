<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 *HTTP method:
 * Get: Untuk menampilkan data
 * Post:  Unutk mengirim data
 * Put: Untuk meng-Udate data
 * Delete: Untuk menghapus data
 */

// Route untuk menampilkan teks salam
Route::get('admin/dashboard', [DashboardController::class, 'index']);
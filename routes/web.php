<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

//route menampilkan halaman student
Route::get('/admin/student', [StudentController::class, 'index']);

//route menampilkan halaman Courses
Route::get('/admin/courses', [CoursesController::class, 'index']);
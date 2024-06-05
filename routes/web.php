<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
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

//route menampilkan halaman tambahan student
Route::get('/admin/student/create', [StudentController::class, 'create']);

//Route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

//route menampilkan halaman edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

//route update
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

//route untuk menghapus
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);




//route menampilkan halaman Courses
Route::get('admin/courses', [CoursesController::class, 'index']);

//route menampilkan halaman tambahan courses
Route::get('admin/courses/create', [CoursesController::class, 'create']);

//Route untuk mengirim data courses baru
Route::post('admin/courses/store', [CoursesController::class, 'store']);

//route menampilkan halaman edit
Route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit']);

//route menyimpan update
Route::put('admin/courses/update/{id}', [CoursesController::class, 'update']);

//route untuk menghapus
Route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']);



<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function() {
   return "Welcome to Assignment 1 of Web Technologies E2021<br>Edit this page to get started 😄";
});
*/
Route::get('/', [MainController::class, "index"])->name("main");
	
Route::get('/departments', [DepartmentController::class, "index"])->name("departments.index");
Route::get('/departments/create', [DepartmentController::class, "create"])->name("departments.create");
Route::post('/departments', [DepartmentController::class, "store"])->name("departments.store");
Route::get('/departments/{department}', [DepartmentController::class, "show"])->name("departments.show");
Route::get('/departments/{department}/edit', [DepartmentController::class, "edit"])->name("departments.edit");
Route::put('/departments/{department}', [DepartmentController::class, "update"])->name("departments.update");
Route::delete('/departments/{department}', [DepartmentController::class, "destroy"])->name("departments.destroy");

Route::get('/courses', [CourseController::class, "index"])->name("courses.index");
Route::get('/courses/create', [CourseController::class, "create"])->name("courses.create");
Route::post('/courses', [CourseController::class, "store"])->name("courses.store");
Route::get('/courses/{course}', [CourseController::class, "show"])->name("courses.show");
Route::get('/courses/{course}/edit', [CourseController::class, "edit"])->name("courses.edit");
Route::put('/courses/{course}', [CourseController::class, "update"])->name("courses.update");
Route::delete('/courses/{course}', [CourseController::class, "destroy"])->name("courses.destroy");

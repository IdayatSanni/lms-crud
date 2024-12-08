<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Grouped routes for students
Route::prefix('students')->name('students.')->group(function () {
    Route::get('trash/{id}', [StudentController::class, 'trash'])->name('trash');
    Route::get('trashed', [StudentController::class, 'trashed'])->name('trashed');
    Route::get('restore/{id}', [StudentController::class, 'restore'])->name('restore');
    Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy'); // Permanently delete
    
    // Resource route for standard CRUD
    Route::resource('/', StudentController::class)->except(['show']); // No need for 'show' if you don't have a detail page
});

// Grouped routes for courses
Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('trash/{id}', [CourseController::class, 'trash'])->name('trash');
    Route::get('trashed', [CourseController::class, 'trashed'])->name('trashed');
    Route::get('restore/{id}', [CourseController::class, 'restore'])->name('restore');
    Route::get('destroy/{id}', [CourseController::class, 'destroy'])->name('destroy'); // Permanently delete
    
    // Resource route for standard CRUD
    Route::resource('/', CourseController::class)->except(['show']); // No need for 'show' if you don't have a detail page
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\CourseController;

Route::view('/', 'home')->name('home');

// Placeholders, we'll build these pages next
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::view('/admissions', 'admissions')->name('admissions');
Route::view('/social', 'social')->name('social');

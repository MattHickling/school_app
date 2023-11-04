<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeachingAssistantController;


Route::get('/', function () {
    return view('home');
})->name('home');

// Classroom routes
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');

// Teacher routes
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');

// Teaching Assistant routes
Route::get('/teaching-assistants/create', [TeachingAssistantController::class, 'create'])->name('teaching-assistants.create');
Route::post('/teaching-assistants', [TeachingAssistantController::class, 'store'])->name('teaching-assistants.store');

Route::get('/plan', [TeacherController::class, 'plan'])->name('teacher.plan');

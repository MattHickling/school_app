<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SchoolYearsController;
use App\Http\Controllers\TeachingAssistantController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');

Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teacher/plan', [TeacherController::class, 'plan'])->name('teacher.plan');


Route::get('/teaching-assistants/create', [TeachingAssistantController::class, 'create'])->name('teaching-assistants.create');
Route::post('/teaching-assistants', [TeachingAssistantController::class, 'store'])->name('teaching-assistants.store');

// Route::get('/plan', [TeacherController::class, 'plan'])->name('teacher.plan');
// Route::get('/plan', [TeacherController::class, 'create'])->name('teacher.plan');
// 

// School Years routes
Route::get('/school-years/create', [SchoolYearsController::class, 'create'])->name('school_years.create');
Route::post('/school-years', [SchoolYearsController::class, 'store'])->name('school_years.store');

// Show classes route (consistency)
Route::get('/school-years/classes', [SchoolYearsController::class, 'showClasses'])->name('school_years.classes');
Route::get('/school-years/classes', [SchoolYearsController::class, 'showClasses'])->name('school_years.show_classes');




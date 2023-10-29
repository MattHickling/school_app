<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/main/create', [HomeController::class, 'create'])->name('main.create');
Route::post('/main', [HomeController::class, 'store'])->name('main.store');

// Classroom routes
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');

// Teacher routes
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');

// Teaching Assistant routes
Route::get('/teaching-assistants/create', [TeachingAssistantController::class, 'create'])->name('teaching-assistants.create');
Route::post('/teaching-assistants', [TeachingAssistantController::class, 'store'])->name('teaching-assistants.store');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

Route::get('/school-selector', [ClassesController::class, 'displayForm'])->name('school-selector');
Route::post('/process-selection', [ClassesController::class, 'processSelection'])->name('process.selection');

Route::get('/main/create', [HomeController::class, 'main.create']);
Route::post('/process-selection', [HomeController::class, 'processSelection'])->name('process.selection');

Route::get('/main/create', [HomeController::class, 'create'])->name('main.create');

Route::post('/select-teachers', [ClassesController::class, 'selectTeachers'])->name('select.teachers');

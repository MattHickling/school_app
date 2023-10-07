<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
    
Route::get('/classrooms/create', 'ClassroomController@create')->name('classrooms.create');
Route::post('/classrooms', 'ClassroomController@store')->name('classrooms.store');

// Route for creating teachers
Route::get('/teachers/create', 'TeacherController@create')->name('teachers.create');
Route::post('/teachers', 'TeacherController@store')->name('teachers.store');

// Route for creating teaching assistants
Route::get('/teaching-assistants/create', 'TeachingAssistantController@create')->name('teaching-assistants.create');
Route::post('/teaching-assistants', 'TeachingAssistantController@store')->name('teaching-assistants.store');
<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [StudentController::class, 'index'])->name('homes');

Route::get('/coursess', [CourseController::class, 'index1'])->name('course1');

Route::get('/takses', [TaskController::class, 'index3'])->name('taks1');

Route::get('/create', function () {
    return view('layouts.create');
})->name("creates");

Route::get('/course', function () {
    return view('layouts.coursec');
})->name("courses");

Route::get("/tasks", function () {
    return view("layouts.taskc");
})->name('tasked');

Route::get("/detailCourse", function () {
    return view("layouts.wlccourse");


})->name('detail.course');

Route::get("/detailTask", function () {
    return view("layouts.wltask");


})->name('detail.task');

Route::get('/edit/{id}', [StudentController::class, 'edited'])->name('edts');


Route::post('/layouts.update', [StudentController::class, 'updateData'])->name('updating');
//create ROute
Route::post('/layouts.create', [StudentController::class, 'store'])->name('store');
//Deleting Route
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('deletes');

Route::get('/deletes/{id}', [CourseController::class, 'delete1'])->name('deletes1');
Route::get('/edits/{id}', [CourseController::class, 'edited1'])->name('cedits');


Route::post('/layouts.updatec', [CourseController::class, 'updateData1'])->name('cupdating');

Route::post('/layouts.coursec', [CourseController::class, 'storec'])->name('storec');

Route::post('/layouts.taskc', [TaskController::class, 'store2'])->name('storings');


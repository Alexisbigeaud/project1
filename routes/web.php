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
    return view('welcome');
});

Route::get("exercise4", function() {
    return redirect('exercise4/connect');
});
Route::get("exercise4", function() {return redirect('exercise4/connect');});
Route::get("exercise4/connect", function() {return view("connect");});
Route::get("exercise4/create", function() {return view("create");});
Route::get("exercise4/contact", function() {return view("contact");});
//1st page
Route::get('exercise4/connect', 'App\Http\Controllers\studentController@createUserForm');
Route::post('exercise4/connect', 'App\Http\Controllers\studentController@UserForm');
//3rd page
use App\Http\Controllers\ContactController;
Route::get('exercise4/contact', function () {return view('contact');});
Route::post('exercise4/create_contact', [ContactController::class, 'create_contact']);
//2nd page
Route::get('/posts', [PostController::class, 'index2'])->name('index2');
Route::get('/posts/create', [PostController::class, 'create'])->name('create');
Route::post('/posts', [PostController::class, 'store'])->name('store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('destroy');
//4th page
Route::get('/students', [\App\Http\Controllers\NewstudentController::class, 'index1'])->name('newindex');
Route::get('/students/create', [\App\Http\Controllers\NewstudentController::class, 'create1'])->name('newcreate');
Route::post('/students', [\App\Http\Controllers\NewstudentController::class, 'store1'])->name('store1');
Route::get('/students/{student}', [\App\Http\Controllers\NewstudentController::class, 'show1'])->name('newshow');
Route::get('/students/{student}/edit', [\App\Http\Controllers\NewstudentController::class, 'edit1'])->name('newedit');
Route::put('/students/{id}', [\App\Http\Controllers\NewstudentController::class, 'update1'])->name('update1');
Route::delete('/students/{student}', [\App\Http\Controllers\NewstudentController::class, 'destroy1'])->name('destroy1');
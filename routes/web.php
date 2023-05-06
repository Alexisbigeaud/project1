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
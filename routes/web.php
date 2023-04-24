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

Route::get('exercise01', function () { return '<h1>Hello world!</h1>'; });
Route::get('exercise02', function () { return [1, 2, 3]; });
Route::get('exercise03', function () { return response()->json(['name' => 'Smith', 'state' => 'CA']); });

Route::get('exercise1', function () { return view('view1'); });

Route::get('exercise2p1', 'App\Http\Controllers\Controller2@print1');
Route::get('exercise2p2', 'App\Http\Controllers\Controller2@print2');
Route::get('exercise2p3', 'App\Http\Controllers\Controller2@print3');

Route::get('form', function () { return view('form'); });
Route::post('formprocessor1', function () { return view('formprocessor1'); });

Route::get('form2a', function () { return view('form2a'); });
Route::post('form2a', function () { return view('form2a'); });

Route::get('form2b', function () { return view('form2b'); });

Route::get('form2c', function () { return view('form2c'); });

Route::get('form3', function () { return view('form3'); });
Route::post('form3', 'App\Http\Controllers\ControllerForm3@print');

Route::get('form4a', function () { return view('form4a1'); });
Route::post('form4a', 'App\Http\Controllers\ControllerForm4@printa');

Route::get('form4b', function () { return view('form4b'); });
Route::post('form4b', 'App\Http\Controllers\ControllerForm4@printb');

Route::get('form4c', function () { return view('form4c'); });
Route::put('form4c', 'App\Http\Controllers\ControllerForm4@printc');

Route::get('form5', function () { return view('form5'); });
Route::post('form5', 'App\Http\Controllers\ControllerForm5@PrintFormContent');

Route::get("exercise4", function() {return redirect('exercise4/connect');});
Route::get("exercise4/connect", function() {return view("connect");});
Route::get("exercise4/create", function() {return view("create");});
Route::get("exercise4/contact", function() {return view("contact");});

Route::get("exercise4b", function() {return redirect('exercise4b/connect');});
Route::get("exercise4b/connect", function() {return View::make("connect2");});
Route::get("exercise4b/create", function() {return View::make("create2");});
Route::get("exercise4b/contact", function() {return View::make("contact2");});

Route::get('databaseread', 'App\Http\Controllers\ControllerDatabase@read');
Route::get('databasewrite', 'App\Http\Controllers\ControllerDatabase@write');

Route::get('model1read', 'App\Http\Controllers\ControllerModel1@readData');
Route::get('model1write', 'App\Http\Controllers\ControllerModel1@writeData');

Route::get('modelread', 'App\Http\Controllers\ControllerModel@read');
Route::get('modelcreate1', 'App\Http\Controllers\ControllerModel@create1');
Route::get('modelcreate2', 'App\Http\Controllers\ControllerModel@create2');
Route::get('modelcreate3', 'App\Http\Controllers\ControllerModel@create3');
Route::get('modelupdate', 'App\Http\Controllers\ControllerModel@update');
Route::get('modeldelete', 'App\Http\Controllers\ControllerModel@delete');

Route::get('databaseform', function () { return view('databaseform'); });
Route::post('databaseformprocess', 'App\Http\Controllers\ControllerModel@databaseformprocess');

Route::get('relationship1', 'App\Http\Controllers\ControllerRelationship@print1');
Route::get('relationship2', 'App\Http\Controllers\ControllerRelationship@print2');

Route::get('bootstrapexample', function () { return view('bootstrapexample'); });
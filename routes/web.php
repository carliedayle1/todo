<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
//use App\Http\Controllers\TodoController; //remove

Route::get('/', [TodoController::class, 'home']);

Route::get('about', [TodoController::class, 'about']);
Route::get('/about', [TodoController::class, 'about']);

Route::get('contact', [TodoController::class, 'contact']);
Route::get('/contact', [TodoController::class, 'contact']);

Route::get('create', [TodoController::class, 'create']);
Route::get('/createtodo', [TodoController::class, 'createtodo']);

//Route::get('/', function () {
    //return view('welcome');
//});
//Route::get('/about', function () {
    //return view('about');
//});
//Route::get('/contact', function () {
    //return view('contact');
//});

Route::post('/todo/store', [TodoController::class, 'store']);

Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);
Route::get('/todo/{todo}', [TodoController::class, 'edit']);
Route::patch('/todo/{todo}', [TodoController::class, 'update']);
>>>>>>>
use App\Http\Controllers\todocontroller;

Route::get('/', [todocontroller::class, 'home']);

Route::get('about', [todocontroller::class, 'about']);

Route::get('contact', [todocontroller::class, 'contact']);

Route::get('create', [todocontroller::class, 'create']);
>>>>>>> 637fb355daa7cbfc44bfbb945b41d8d70b5e3bce

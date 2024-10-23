<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoController; //remove

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
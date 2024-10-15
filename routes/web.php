<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/', [TodoController::class, 'welcome']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', [TodoController::class, 'about']);
Route::get('/contact', [TodoController::class, 'contact']);
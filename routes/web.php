<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', [TodoController::class, 'about']);

Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/contacts', [TodoController::class, 'contacts']);
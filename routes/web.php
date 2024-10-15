<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/todos', [TodoController::class, 'showTodos'])->name('todos.index');

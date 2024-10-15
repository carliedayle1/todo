<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); // Added name to route

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/create', [TodoController::class, 'create']);

Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
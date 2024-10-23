<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController; // Keep this line if you use TodoController

// Home route
Route::get('/', [TodoController::class, 'home'])->name('home');

// About page
Route::get('/about', [TodoController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [TodoController::class, 'contact'])->name('contact');

// Create Todo route
Route::get('/create-todo', [TodoController::class, 'createTodo'])->name('todo.create');
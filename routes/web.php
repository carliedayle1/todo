<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Home route
Route::get('/', [TodoController::class, 'welcome'])->name('welcome');

// About page
Route::get('/about', [TodoController::class, 'about']);

// Contact page
Route::get('/contact', [TodoController::class, 'contact']);

// Create Todo routes
Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/store', [TodoController::class, 'store'])->name('todo.store');

// Edit Todo routes
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todo.update');

// Delete Todo route
Route::delete('/todos/{id}', [TodoController::class, 'delete'])->name('todos.delete');
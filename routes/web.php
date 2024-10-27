<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;

// Route::get('/', [Todocontroller::class, 'welcome']);
Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); 

Route::get('/about', [Todocontroller::class, 'about']);

Route::get('/contact', [Todocontroller::class, 'contact']);

Route::get('/create', [TodoController::class, 'create'])->name('todo.create');

Route::post('/store', [TodoController::class, 'store'])->name('todo.store');

Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');

Route::delete('/todos/{id}', [TodoController::class, 'delete'])->name('todos.delete');

Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todos.update');



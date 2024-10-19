<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); 

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/create', [TodoController::class, 'create']);

Route::post('/', [TodoController::class, 'store'])->name('todo.store');

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get('/todos/{id}/update', [TodoController::class, 'update'])->name('todo.edit');
Route::put('/todos/{id}/update', [TodoController::class, 'update'])->name('todo.update');
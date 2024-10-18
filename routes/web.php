<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); // Added name to route

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/create', [TodoController::class, 'create']);

Route::post('/', [TodoController::class, 'store'])->name('todo.store');

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get('/todos/{id}/edit', [TodoController::class, 'editOrUpdate'])->name('todo.editOrUpdate');
Route::put('/todos/{id}/edit', [TodoController::class, 'editOrUpdate']);
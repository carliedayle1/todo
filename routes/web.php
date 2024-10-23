<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;

// Route::get('/', [Todocontroller::class, 'welcome']);
Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); // Added name to route

Route::get('/about', [Todocontroller::class, 'about']);

Route::get('/contact', [Todocontroller::class, 'contact']);

Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
// Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{id}', [TodoController::class, 'delete'])->name('todos.delete');


//  Route::get('/create', [TodoController::class, 'create']);
// // Route::get('/create', function () {
// //     return view('create');
// // });

// Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');

//genuinely dont know what the faq am doing, random bs gooooo

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


// Route to display the list of todos
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');



Route::get('/new-layout', function () {
    return view('pages.new_layout_view');
});

use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'welcome'])->name('welcome');  
Route::get('/create', [TodoController::class, 'create'])->name('todos.create');  
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');  

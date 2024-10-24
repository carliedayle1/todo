<?php
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route for home page, using the 'home' method from TodoController
Route::get('/', [TodoController::class, 'home'])->name('home');

// Route for about page
Route::get('/about', [TodoController::class, 'about'])->name('about');

// Route for contact page
Route::get('/contact', [TodoController::class, 'contact'])->name('contact');
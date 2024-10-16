<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contacts', [TodoController::class, 'contacts']);
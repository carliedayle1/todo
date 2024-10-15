<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/create', [TodoController::class, 'create']);

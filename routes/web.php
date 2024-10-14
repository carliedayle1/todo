<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [TodosController::class, 'home']);

Route::get('/about', [TodosController::class, 'about']);

Route::get('/contact', [TodosController::class, 'contacts']);
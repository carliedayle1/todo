<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodosController::class, 'welcome']);

Route::get('/about', [TodosController::class, 'about']);

Route::get('/contact', [TodosController::class, 'contact']);


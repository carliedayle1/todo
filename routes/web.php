<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', [TodosController::class, 'welcome']);

Route::get('/about', [TodosController::class, 'about']);

Route::get('/contact', [TodosController::class, 'contact']);

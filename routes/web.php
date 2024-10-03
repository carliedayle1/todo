<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', [TodosController::class, 'home']);

Route::get('about', [TodosController::class, 'about']);

Route::get('contact', [TodosController::class, 'contact']);
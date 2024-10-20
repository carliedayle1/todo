<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/', [TodosController::class, 'home']);

Route::get('/about', [TodosController::class, 'about']);

Route::get('/contact', [TodosController::class, 'contact']);

Route::get('/todo/create', [TodosController::class, 'create']);

Route::post('/todo/store', [TodosController::class, 'store']);

Route::delete('/todo/{todo}', [TodosController::class, 'destroy']);

Route::get('/todo/{todo}', [TodosController::class, 'edit']);

Route::patch('/todo/{todo}', [TodosController::class, 'update']);
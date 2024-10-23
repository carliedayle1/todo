<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/todo/create', [TodoController::class, 'create']);

Route::post('/todo/store', [TodoController::class, 'store']);

Route::delete('/todo/{todos}', [TodoController::class, 'destroy']);

Route::get('/todo/{todos}', [TodoController::class, 'edit']);

Route::patch('/todo/{todos}', [TodoController::class, 'update']);

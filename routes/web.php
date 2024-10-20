<?php


use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', [TodoController::class, 'about']);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/create', [TodoController::class, 'create']);

Route::post('/todo/store', [TodoController::class, 'store']);

Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);

Route::get('/todo/{todo}', [TodoController::class, 'edit']);

Route::patch('/todo/{todo}', [TodoController::class, 'update']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'welcome']);

Route::get('/about', [TodoController::class, 'about' ]);

Route::get('/contact', [TodoController::class, 'contact']);

Route::get('/createtodo', [TodoController::class, 'createtodo']);

//CRUD Functionalities
Route::post('/todo/store', [TodoController::class, 'store']);
Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);
Route::get('/todo/{todo}', [TodoController::class, 'edit']);
Route::patch('/todo/{todo}', [TodoController::class, 'update']);
?>
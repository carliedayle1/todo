<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/api/todo')->group(function () {
    Route::get('/', [TodoController::class, 'index']);
    Route::get('/{id}', [TodoController::class, 'getTodoId']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

<<<<<<< HEAD

=======
>>>>>>> be64df9f1e37a74233d1486a905f89e6684ab63e
Route::get('/', [TodosController::class, 'home']);

Route::get('/about', [TodosController::class, 'about']);

<<<<<<< HEAD
Route::get('/contact', [TodosController::class, 'contacts']);
=======
Route::get('/contact', [TodosController::class, 'contacts']);
>>>>>>> be64df9f1e37a74233d1486a905f89e6684ab63e

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todocontroller;

Route::get('/', [todocontroller::class, 'home']);

Route::get('about', [todocontroller::class, 'about']);

Route::get('contact', [todocontroller::class, 'contact']);

Route::get('create', [todocontroller::class, 'create']);
<?php

use App\Http\Controllers\todocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/about', [todocontroller::class, 'about']);
Route::get('/contact', [todocontroller::class, 'contact']);
Route::get('/', [todocontroller::class, 'welcome']);
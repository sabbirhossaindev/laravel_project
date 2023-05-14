<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'payment']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('user', [UserController::class, 'create']);
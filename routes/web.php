<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FromController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'payment']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('user', [UserController::class, 'create']);
Route::get('from', [FromController::class, 'payment']);

// Route::get('users', 'UserController@index');
// Route::get('create_user', 'UserController@create');
// Route::post('add-user', 'UserController@store');
// Route::put('update-user', 'UserController@update');
// Route::patch('update-user-name', 'UserController@updateName');
// Route::delete('delete-user', 'UserController@delete');

Route::get('create-users', function () {
    $data = [
        'name' => 'Sabbir',
        'email' => 'mdsabbir477470@gmail.com',
        'password' => 'sabbir111'
    ];

    DB::table('users')->insert($data);
});
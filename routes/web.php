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

Route::get('user-list', 		'UserController@index')->name('user_list');
Route::get('users/{id}/profile/{email?}', 		'UserController@show');



Route::get('users/{id}', 	'UserController@display')->where('id', '[0-9]+');
Route::get('users/create',  'UserController@create');

Route::post('users', 		'UserController@store');
Route::put('users', 		'UserController@update');
Route::patch('users', 		'UserController@updateName');
Route::delete('users', 		'UserController@delete');

Route::redirect('/test', '/test-any');

Route::any('test-any', function () {
    return 'I am from Any';
});
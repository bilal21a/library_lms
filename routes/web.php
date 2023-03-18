<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Users Management
Route::resource('users', UserController::class);
Route::get('get_users', [App\Http\Controllers\UserController::class, 'get_data'])->name('get_users');
// Author Management
Route::resource('author', AuthorController::class);
Route::get('get_author', [App\Http\Controllers\AuthorController::class, 'get_data'])->name('get_author');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

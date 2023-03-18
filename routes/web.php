<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('users', 'UserController');
Route::get('get_users', [UserController::class, 'get_data'])->name('get_users');
// Author Management
Route::resource('author', 'AuthorController');
Route::get('get_author', [AuthorController::class, 'get_data'])->name('get_author');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

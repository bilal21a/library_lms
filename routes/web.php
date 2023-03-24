<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
// category Management
Route::resource('categories', 'CategoryController');
Route::get('get_categories', [CategoryController::class, 'get_data'])->name('get_categories');
Route::post('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Books Management
Route::resource('book', 'BookController');
Route::get('get_books', [BookController::class, 'get_data'])->name('get_books');
Route::post('book/{id}', [BookController::class, 'update'])->name('book.update');


Route::match(['get', 'post'], 'category', [CategoryController::class, 'user_categories'])->name('categories.user');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

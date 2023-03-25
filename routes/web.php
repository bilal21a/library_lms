<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IssuedBooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
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

Route::get('reports', [ReportsController::class, 'index'])->name('reports.index');

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
Route::match(['get', 'post'], 'category', [CategoryController::class, 'user_categories'])->name('categories.user');
// Books Management
Route::resource('book', 'BookController');
Route::get('get_books', [BookController::class, 'get_data'])->name('get_books');
Route::post('book/{id}', [BookController::class, 'update'])->name('book.update');
Route::match(['get', 'post'], 'books', [BookController::class, 'user_books'])->name('book.user');
Route::get('books/view_book/{id}/{user_info?}', [BookController::class, 'view_book'])->name('book.view_book');
// Issued Book Management
Route::resource('issuedBooks', 'IssuedBooksController');
Route::get('get_issuedBooks', [IssuedBooksController::class, 'get_data'])->name('get_issuedBooks');
Route::post('return_issuedBooks', [IssuedBooksController::class, 'return_issuedBooks'])->name('return_issuedBooks');
Route::get('return_book/{id}', [IssuedBooksController::class, 'return_book'])->name('return_book');
Route::post('return_book_data', [IssuedBooksController::class, 'return_book_data'])->name('return_book_data');


// profile routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IssuedBooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RenewRequestController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RequestedBooksController;
use App\Http\Controllers\ReserveRequestController;
use App\Http\Controllers\UserController;
use App\RequestedBooks;
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
Route::get('profile/get_issued_books', [ProfileController::class, 'get_issued_books'])->name('profile.get_issued_books');
Route::get('profile/get_returned_books', [ProfileController::class, 'get_returned_books'])->name('profile.get_returned_books');
Route::get('profile/get_requested_books', [ProfileController::class, 'get_requested_books'])->name('profile.get_requested_books');
Route::get('profile/get_reserved_books', [ProfileController::class, 'get_reserved_books'])->name('profile.get_reserved_books');

// Request Books
Route::get('requested_books', [RequestedBooksController::class, 'index'])->name('requested_books.index');
Route::get('get_requested_books', [RequestedBooksController::class, 'get_requested_books'])->name('requested_books.get_requested_books');
Route::get('add_request', [RequestedBooksController::class, 'add_request'])->name('requested_books.add_request');
Route::post('save_request', [RequestedBooksController::class, 'save_request'])->name('requested_books.save_request');
Route::get('delete_book_request/{id}', [RequestedBooksController::class, 'delete_book_request'])->name('requested_books.delete_book_request');

// Reserve Books
Route::get('reserve_request', [ReserveRequestController::class, 'index'])->name('reserve_request.index');
Route::get('get_reserved_request', [ReserveRequestController::class, 'get_reserved_request'])->name('reserve_request.get_reserved_request');
Route::get('add_reserved_request', [ReserveRequestController::class, 'add_reserved_request'])->name('reserve_request.add_reserved_request');
Route::post('save_reserved_request', [ReserveRequestController::class, 'save_reserved_request'])->name('reserve_request.save_reserved_request');
Route::get('delete_reserved_request/{id}', [ReserveRequestController::class, 'delete_reserved_request'])->name('reserve_request.delete_reserved_request');
Route::get('approve_reserved_request/{id}', [ReserveRequestController::class, 'approve_reserved_request'])->name('reserve_request.approve_reserved_request');

// Renew Request
Route::get('renew_request', [RenewRequestController::class, 'index'])->name('renew_request.index');
Route::get('get_renew_request', [RenewRequestController::class, 'get_renew_request'])->name('renew_request.get_renew_request');
Route::get('add_renew_request', [RenewRequestController::class, 'add_renew_request'])->name('renew_request.add_renew_request');
Route::post('save_renew_request', [RenewRequestController::class, 'save_renew_request'])->name('renew_request.save_renew_request');
Route::get('delete_renew_request/{id}', [RenewRequestController::class, 'delete_renew_request'])->name('renew_request.delete_renew_request');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

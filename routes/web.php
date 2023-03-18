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


// // user Management
// Route::get('/user_management', [UserController::class, 'index'])->name('user_management');
// Route::get('/get_users', [UserController::class, 'get_data'])->name('get_users');
// Route::get('/user_add_show', [UserController::class, 'add_form'])->name('user_add_show');
// Route::post('/add_user', [UserController::class, 'save_data'])->name('add_user');
// Route::get('/edit_user/{id}', [UserController::class, 'edit_form'])->name('edit_user');
// Route::post('/update_user', [UserController::class, 'update_data'])->name('update_user');
// Route::get('/delete_user/{id}', [UserController::class, 'delete_data'])->name('delete_user');

// Users Crud
Route::resource('users', UserController::class);
Route::get('get_users', [App\Http\Controllers\UserController::class, 'get_data'])->name('get_users');
// Author Crud
Route::resource('author', AuthorController::class);
Route::get('get_author', [App\Http\Controllers\AuthorController::class, 'get_data'])->name('get_author');



// Route::get('/authors', [UserController::class, 'index'])->name('authors');
// Route::get('/user_add_show', [UserController::class, 'add_form'])->name('user_add_show');
// Route::post('/add_user', [UserController::class, 'save_data'])->name('add_user');
// Route::get('/edit_user/{id}', [UserController::class, 'edit_form'])->name('edit_user');
// Route::post('/update_user', [UserController::class, 'update_data'])->name('update_user');
// Route::get('/delete_user/{id}', [UserController::class, 'delete_data'])->name('delete_user');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

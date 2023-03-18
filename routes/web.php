<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
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
// ----------------customer---------------------
Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');
Route::get('/customer/add_customer', [CustomerController::class, 'add_customer'])->name('add_customer');
Route::get('/customer/edit_customer', [CustomerController::class, 'edit_customer'])->name('edit_customer');

// ----------------customer End---------------------

// ----------------Products---------------------

Route::get('/product', [ProductsController::class, 'product'])->name('product');
Route::get('/product/add_product', [ProductsController::class, 'add_product'])->name('add_product');
Route::get('/product/edit_product', [ProductsController::class, 'edit_product'])->name('edit_product');
// ----------------Products End---------------------

Route::get('/user_management', [UserController::class, 'user_management'])->name('user_management');
Route::get('/get_users', [UserController::class, 'get_users'])->name('get_users');
Route::get('/user_add_show', [UserController::class, 'user_add_show'])->name('user_add_show');
Route::post('/add_user', [UserController::class, 'add_user'])->name('add_user');
Route::get('/edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user');
Route::post('/update_user', [UserController::class, 'update_user'])->name('update_user');
Route::get('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');


Route::get('/role', [RoleController::class, 'role_view'])->name('role_view');
Route::get('/role/role_details', [RoleController::class, 'role_details'])->name('role_details');
Route::get('/stores', [StoreController::class, 'stores_view'])->name('stores_view');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

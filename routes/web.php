<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;




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
    return view('welcome');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::post('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::get('users/delete/{id}',[UserController::class,'delete'])->name('user.delete');






Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/index',[ProductController::class,'index'])->name('products.index');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('products/delete/{id}',[ProductController::class,'delete'])->name('product.delete');




 Route::get('roles/create',[RoleController::class,'create'])->name('roles.create');
 Route::get('roles/index',[RoleController::class,'index'])->name('roles.index');
Route::post('roles/store',[RoleController::class,'store'])->name('roles.store');
Route::get('roles/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');
Route::get('roles/delete/{id}',[RoleController::class,'delete'])->name('roles.delete');





Route::get('secrets/create',[SecretController::class,'create'])->name('secrets.create');
Route::get('secrets/index',[SecretController::class,'index'])->name('secrets.index');
Route::post('secrets/store',[SecretController::class,'store'])->name('secrets.store');
Route::get('secrets/delete/{id}',[SecretController::class,'delete'])->name('secrets.delete');
Route::get('secrets/edit/{id}',[SecretController::class,'edit'])->name('secrets.edit');




Route::get('orders/create',[OrderController::class,'create'])->name('orders.create');
Route::get('orders/index',[OrderController::class,'index'])->name('orders.index');
Route::post('orders/store',[OrderController::class,'store'])->name('orders.store');
Route::get('orders/delete/{id}',[OrderController::class,'delete'])->name('orders.delete');
Route::get('orders/edit/{id}',[OrderController::class,'edit'])->name('orders.edit');




Route::get('transactions/create',[TransactionController::class,'create'])->name('transactions.create');
Route::post('transactions/store',[TransactionController::class,'store'])->name('transactions.store');
Route::get('transactions/index',[TransactionController::class,'index'])->name('transactions.index');
Route::get('transactions/edit/{id}',[TransactionController::class,'edit'])->name('transactions.edit');
Route::get('transactions/delete/{id}',[TransactionController::class,'delete'])->name('transactions.delete');

Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

 Route::get('post/create',[PostController::class,'create'])->name('post.create');
// Route::post('post/store',[PostController::class,'store'])->name('post.store');
 Route::get('post/index',[PostController::class,'index'])->name('post.index');






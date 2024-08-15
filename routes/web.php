<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('register');
});
Route::match(['GET', 'POST'], 'registerSave', [UserController::class, 'register'])->name('registerSave');

Route::view('login', 'login')->name('login');
Route::match(['GET', 'POST'], 'loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::middleware(ValidUser::class)->group(function () {
  Route::view('welcome', 'welcome')->name('welcome');

  Route::controller(ProductController::class)->group(function () {

    Route::get('/products', 'show')->name('products');
    Route::get('product/product/{id}', 'single')->name('view.product');
    Route::match(['GET', 'POST'], 'product/add', 'add')->name('add.product');
    Route::match(['GET', 'POST'], 'product/update/{id}', 'update')->name('update.product');
    Route::get('product/delete/{id}', 'delete')->name('delete.product');
  });
  Route::controller(ProductVariantController::class)->group(function () {

    Route::get('/provariants', 'show')->name('provariants');
    Route::get('/delete/{id}', 'delete')->name('delete.productvar');
  });
});

Route::controller(CustomerController::class)->group(function () {

  Route::get('/customers', 'customer')->name('customer');
  Route::get('/customers/{id}', 'single')->name('view.customer');
  Route::match(['GET', 'POST'], 'order/{id}', 'order')->name('order.customer');
});

Route::get('logout', [UserController::class, 'logout'])->name('logout');

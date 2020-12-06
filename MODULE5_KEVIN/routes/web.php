<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::view('/', 'home')->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::view('/product/add', 'addProduct')->name('addProduct');

// Route::get('/product/add', function () {
//     return view('addProduct');
// })->name('addProduct');

// Route::post('/product/add', function () {
//     return view('addProduct');
// });
Route::post('/product/add', [ProductController::class, 'addProduct'])->name('addProductPost');
Route::post('/product/delete', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/product/update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
Route::post('/product/update/{id}', [ProductController::class, 'updateProductPost'])->name('updateProductPost');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/order/history', [OrderController::class, 'history'])->name('history');
Route::get('/order/{id}', [OrderController::class, 'processOrder'])->name('processOrder');
Route::post('/order/{id}', [OrderController::class, 'processOrderPost'])->name('processOrderPost');

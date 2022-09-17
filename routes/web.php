<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\productContrller;
use App\Http\Controllers\productController;
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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('kelola-product', [productController::class, 'index'])->name('index-product');
Route::get('show-product', [productController::class, 'show'])->name('show-product');
Route::post('edit-product/{$id}', [productController::class, 'update'])->name('edit-product');
Route::post('add-product', [productController::class, 'store'])->name('add-product');
Route::post('delete-product/{$id}', [productController::class, 'delete'])->name('delete-product');


Route::get('/test', function () {
    dd('hello');
});

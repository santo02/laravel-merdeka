<?php

use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductControllerCRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Product-pria', [ProductController::class, 'pria']);
Route::get('Product-wanita', [ProductController::class, 'wanita']);
Route::get('Product-trending', [ProductController::class, 'trending']);

Route::get('kategori', [KategoriController::class, 'showKategori']);
Route::post('add-product', [ProductControllerCRUD::class, 'store']);
Route::get('product/show', [ProductControllerCRUD::class, 'index']);
Route::get('product/edit/{id}', [ProductControllerCRUD::class, 'edit']);
Route::post('product/update/{id}', [ProductControllerCRUD::class, 'update']);

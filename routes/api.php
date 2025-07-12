<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderTransactionController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::apiResource('/products', ProductController::class);

Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
Route::apiResource('/categories', CategoryController::class);

Route::get('/brand/{brand:slug}', [BrandController::class, 'show']);
Route::apiResource('/brands', BrandController::class);

Route::post('/order-transaction', [OrderTransactionController::class, 'store']);
Route::post('/check-order', [OrderTransactionController::class, 'order_details']);

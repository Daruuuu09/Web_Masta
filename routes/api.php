<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryMovementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceHistoryController;
use App\Http\Controllers\ProductBatchController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendefinisikan semua route API.
| File ini akan otomatis dikenali oleh Laravel sebagai route dengan prefix '/api'
| dan middleware group 'api', termasuk tanpa proteksi CSRF.
|
*/

// Cek user login (jika menggunakan Sanctum/Passport)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD API untuk Inventory Movements
Route::apiResource('inventory-movements', InventoryMovementController::class);

// (Opsional) Custom route tambahan jika kamu perlu
// Route::get('inventory-movements/by-product/{product_id}', [InventoryMovementController::class, 'getByProduct']);

// CRUD API untuk Price History
Route::apiResource('price-history', PriceHistoryController::class);

// CRUD API untuk Products
Route::apiResource('products', ProductController::class);


// CRUD API untuk Products Batches
Route::apiResource('product-batches', ProductBatchController::class);

// Batch routes
Route::get('/product-batches', [ProductBatchController::class, 'index']);
Route::get('/products/{productId}/batches', [ProductBatchController::class, 'indexByProduct']);
Route::post('/products/{productId}/batches', [ProductBatchController::class, 'storeForProduct']);
Route::apiResource('product-batches', ProductBatchController::class)->except(['store']);


Route::post('/products/{product}/batches', [ProductBatchController::class, 'storeForProduct']);

// Di api.php
Route::get('/products/{product}/batches', [ProductBatchController::class, 'indexByProduct']);
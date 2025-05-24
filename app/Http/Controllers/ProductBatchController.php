<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductBatch;
use Illuminate\Http\Request;

class ProductBatchController extends Controller
{
    // Method untuk semua batch (tidak direkomendasikan untuk production)
    public function index()
    {
        return response()->json(ProductBatch::all());
    }

    // Method untuk batch berdasarkan product_id
    public function indexByProduct($productId)
    {
        $batches = ProductBatch::where('product_id', $productId)
                     ->orderBy('date_received')
                     ->get();
        
        return response()->json([
            'success' => true,
            'data' => $batches
        ]);
    }

    // Method untuk create batch untuk product tertentu
   public function storeForProduct(Request $request, $productId)
{
    // Validasi
    $validated = $request->validate([
        'quantity' => 'required|integer|min:1',
        'purchase_price' => 'required|numeric|min:0',
        'date_received' => 'required|date',
        'expiry_date' => 'nullable|date'
    ]);

    // Cek apakah product ada
    $product = Product::find($productId);
    if (!$product) {
        return response()->json([
            'success' => false,
            'message' => 'Product tidak ditemukan'
        ], 404);
    }

    // Buat batch
    $batch = $product->batches()->create([
        'batch_id' => 'BATCH-'.uniqid(),
        'quantity' => $validated['quantity'],
        'remaining_quantity' => $validated['quantity'], // Set awal sama dengan quantity
        'purchase_price' => $validated['purchase_price'],
        'date_received' => $validated['date_received'],
        'expiry_date' => $validated['expiry_date'] ?? null
    ]);

    return response()->json([
        'success' => true,
        'data' => $batch
    ], 201);
}

    // Method lainnya tetap sama...
    public function show($id) { /* ... */ }
    public function update(Request $request, $id) { /* ... */ }
    public function destroy($id) { /* ... */ }
}
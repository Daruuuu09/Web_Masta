<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // List semua produk
    public function index()
    {
        return response()->json(Product::all());
    }

    // Tambah produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:10|unique:products,id',
            'name' => 'required|string|max:100',
            'brand' => 'required|string|max:50',
            'category' => 'required|string|max:20',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:20',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    // Tampilkan satu produk
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|string|max:100',
            'brand' => 'sometimes|string|max:50',
            'category' => 'sometimes|string|max:20',
            'price' => 'sometimes|numeric',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:20',
        ]);

        $product->update($validated);
        return response()->json($product);
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully.']);
    }
}

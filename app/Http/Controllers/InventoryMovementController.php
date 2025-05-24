<?php

namespace App\Http\Controllers;

use App\Models\InventoryMovement;
use Illuminate\Http\Request;

class InventoryMovementController extends Controller
{
    // Get all
    public function index()
    {
        return response()->json(InventoryMovement::all());
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'batch_id' => 'required|string|max:15',
            'product_id' => 'required|string|max:10',
            'quantity' => 'required|integer',
            'movement_type' => 'required|in:in,out',
            'movement_date' => 'nullable|date',
            'reference' => 'nullable|string|max:100',
            'notes' => 'nullable|string',
        ]);

        $movement = InventoryMovement::create($request->all());
        return response()->json($movement, 201);
    }

    // Show single record
    public function show($id)
    {
        $movement = InventoryMovement::findOrFail($id);
        return response()->json($movement);
    }

    // Update
    public function update(Request $request, $id)
    {
        $movement = InventoryMovement::findOrFail($id);
        $movement->update($request->all());

        return response()->json($movement);
    }

    // Delete
    public function destroy($id)
    {
        $movement = InventoryMovement::findOrFail($id);
        $movement->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}

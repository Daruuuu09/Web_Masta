<?php

namespace App\Http\Controllers;

use App\Models\PriceHistory;
use Illuminate\Http\Request;

class PriceHistoryController extends Controller
{
    public function index()
    {
        return response()->json(PriceHistory::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|string|max:10',
            'old_price' => 'required|numeric',
            'new_price' => 'required|numeric',
            'changed_at' => 'nullable|date',
            'changed_by' => 'nullable|string|max:50',
        ]);

        $history = PriceHistory::create($data);
        return response()->json($history, 201);
    }

    public function show($id)
    {
        $history = PriceHistory::findOrFail($id);
        return response()->json($history);
    }

    public function update(Request $request, $id)
    {
        $history = PriceHistory::findOrFail($id);

        $data = $request->validate([
            'product_id' => 'sometimes|required|string|max:10',
            'old_price' => 'sometimes|required|numeric',
            'new_price' => 'sometimes|required|numeric',
            'changed_at' => 'nullable|date',
            'changed_by' => 'nullable|string|max:50',
        ]);

        $history->update($data);
        return response()->json($history);
    }

    public function destroy($id)
    {
        $history = PriceHistory::findOrFail($id);
        $history->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}

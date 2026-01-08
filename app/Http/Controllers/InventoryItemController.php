<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryItemRequest;
use App\Models\InventoryItem;

class InventoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InventoryItem::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryItemRequest $request)
    {
        $inventoryItem = InventoryItem::create($request->validated());
        return $inventoryItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryItem $inventoryItem)
    {
        return $inventoryItem;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInventoryItemRequest $request, InventoryItem $inventoryItem)
    {
        $inventoryItem->update($request->validated());
        return $inventoryItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryItem $inventoryItem)
    {
        $inventoryItem->delete();
        return response()->noContent();
    }
}

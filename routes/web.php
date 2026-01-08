<?php

use App\Http\Controllers\InventoryItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('inventory-items', InventoryItemController::class);

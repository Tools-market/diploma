<?php

namespace App\Http\Controllers;

use App\Models\StoreProduct;
use Illuminate\Http\Request;

class StoreProductsController extends Controller
{
    public function index()
    {
        return response()->json(StoreProduct::all());
    }

    public function store(Request $request)
    {
        $storeProduct = StoreProduct::create($request->all());
        return response()->json($storeProduct, 201);
    }

    public function show(StoreProduct $storeProduct)
    {
        return response()->json($storeProduct);
    }

    public function update(Request $request, StoreProduct $storeProduct)
    {
        $storeProduct->update($request->all());
        return response()->json($storeProduct);
    }

    public function destroy(StoreProduct $storeProduct)
    {
        $storeProduct->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index()
    {
        return response()->json(Store::all());
    }

    public function store(Request $request)
    {
        $store = Store::create($request->all());
        return response()->json($store, 201);
    }

    public function show(Store $store)
    {
        return response()->json($store);
    }

    public function update(Request $request, Store $store)
    {
        $store->update($request->all());
        return response()->json($store);
    }

    public function destroy(Store $store)
    {
        $store->delete();
        return response()->json(null, 204);
    }
}

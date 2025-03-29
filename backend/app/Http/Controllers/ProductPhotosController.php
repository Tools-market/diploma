<?php

namespace App\Http\Controllers;

use App\Models\ProductPhoto;
use Illuminate\Http\Request;

class ProductPhotosController extends Controller
{
    public function index()
    {
        return response()->json(ProductPhoto::all());
    }

    public function store(Request $request)
    {
        $photo = ProductPhoto::create($request->all());
        return response()->json($photo, 201);
    }

    public function show(ProductPhoto $photo)
    {
        return response()->json($photo);
    }

    public function update(Request $request, ProductPhoto $photo)
    {
        $photo->update($request->all());
        return response()->json($photo);
    }

    public function destroy(ProductPhoto $photo)
    {
        $photo->delete();
        return response()->json(null, 204);
    }
}

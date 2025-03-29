<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function index()
    {
        return response()->json(Favourite::all());
    }

    public function store(Request $request)
    {
        $favourite = Favourite::create($request->all());
        return response()->json($favourite, 201);
    }

    public function show(Favourite $favourite)
    {
        return response()->json($favourite);
    }

    public function update(Request $request, Favourite $favourite)
    {
        $favourite->update($request->all());
        return response()->json($favourite);
    }

    public function destroy(Favourite $favourite)
    {
        $favourite->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index()
    {
        return response()->json(Address::all());
    }

    public function store(Request $request)
    {
        $address = Address::create($request->all());
        return response()->json($address, 201);
    }

    public function show(Address $address)
    {
        return response()->json($address);
    }

    public function update(Request $request, Address $address)
    {
        $address->update($request->all());
        return response()->json($address);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json(null, 204);
    }
}

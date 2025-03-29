<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function index()
    {
        return response()->json(OrderItem::all());
    }

    public function store(Request $request)
    {
        $orderItem = OrderItem::create($request->all());
        return response()->json($orderItem, 201);
    }

    public function show(OrderItem $orderItem)
    {
        return response()->json($orderItem);
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        $orderItem->update($request->all());
        return response()->json($orderItem);
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return response()->json(null, 204);
    }
}

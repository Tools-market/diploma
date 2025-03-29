<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return response()->json(Review::all());
    }

    public function store(Request $request)
    {
        $review = Review::create($request->all());
        return response()->json($review, 201);
    }

    public function show(Review $review)
    {
        return response()->json($review);
    }

    public function update(Request $request, Review $review)
    {
        $review->update($request->all());
        return response()->json($review);
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return response()->json(null, 204);
    }
}

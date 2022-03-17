<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function create(Review $review)
    {
        return view('reviews/create')->with(['review' => $review]);
    }
    
    public function store(Request $request, Review $review)
    {
         $input = $request['review'];
         $review->fill($input)->save();
         return redirect('/reviews/' . $review->id);
}
}

<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Store;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function create(Review $review, Store $store)
    {
        return view('reviews/create')->with(['review' => $review, 'store' => $store]);
    }
    
    public function store(Request $request, Review $review, Store $store) 
    {
         $input = $request['review'];
         $input['user_id'] = Auth::id();
         $input['store_id'] = $store->id;
         $review->fill($input)->save();
         return redirect('/stores/' . $store->id . '/reviews');
    }
}

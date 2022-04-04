<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Store;
use App\Likes;

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
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
    
    public function __construct()
    {
        $this->middleware(['auth','verified'])->only(['like','unlike']);
    }
    
    public function like($id)
    {
        Like::create([
            'review_id' => $id,
            'user_id' => Auth::id(),
        ]);
        
        session()->flash('success', 'You Liked the Reply.');
        
        return redirect()->back();
    }
    
    public function unlike($id)
    {
         $like = Like::where('review_id', $id)->where('user_id', Auth::id())->first();
         $like->delete();

         session()->flash('success', 'You Unliked the Reply.');

        return redirect()->back();
    }
}

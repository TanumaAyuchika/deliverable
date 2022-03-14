<?php

namespace App\Http\Controllers;

use App\Review;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        return view('stores/index')->with(['stores' => $store->getPaginateByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['review' => $review]);
    }
    
    public function create()//店舗登録ボタン
    {
        return view('stores/create');
    }
    
    public function store(Store $store, Request $request)
    {
        $input = $request['store'];
        $store->fill($input)->save();
        return redirect('/reviews/create' .$store->id);
    }
}

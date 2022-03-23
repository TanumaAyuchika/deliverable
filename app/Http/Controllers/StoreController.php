<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Review;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Store $store)
    {
        return view('stores/index')->with(['stores' => $store->getPaginateByLimit()]);
    }
    
    public function show(Store $store, Review $review)
    {
         $reviews =  $store->reviews;
        return view('stores/show')->with(['store' => $store, 'reviews' => $reviews]);
    }
    
    public function create()//店舗登録ボタン
    {
        return view('stores/create');
    }
    
    public function store(Store $store, Request $request)
    {
        $input = $request['review'];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id . '/reviews/create');
    }
}

<?php

namespace App\Http\Controllers;

use App\Review;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('stores/create');
    }
    
    public function store(Store $store, Request $request)
    {
        $input = $request['store'];
        $store->fill($input)->save();
        return redirect('/stores/' .$store->id);
    }
}

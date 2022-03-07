<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('create');
    }
}

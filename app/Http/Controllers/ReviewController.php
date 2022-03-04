<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
}

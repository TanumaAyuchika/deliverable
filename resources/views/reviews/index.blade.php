<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
        <h1>エニタイム店舗情報</h1>
        <p class='create'>[<a href='/stores/create'>create</a>]</p>
        <div class='reviews'>
            @foreach ($reviews as $review)
               <div class='review'>
                   <h2 class='title'> <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a></h2>
                   <p class='review'>総合評価：{{ $review->review }}</p>
                   <p class='chest'>胸：{{ $review->chest }}</p>
                   <p class='arm'>腕：{{ $review->arm }}</p>
                   <p class='shoulder'>肩：{{ $review->shoulder }}</p>
                   <p class='belly'>腹：{{ $review->belly }}</p>
                   <p class='back'>背中：{{ $review->back }}</p>
                   <p class='leg'>脚：{{ $review->leg }}</p>
                   <p class='comment'>コメント：{{ $review->comment }}</p>
               </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
@endsection


<h1>店舗詳細</h1>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>エニタイム各店舗詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>店舗詳細</h1>
        
        <div class='stores'>
             <h2 class='name'>{{ $store->name }}</h2>
             <p class='address'>{{ $store->address }}</p>
        </div>
        @foreach ($reviews as $review)   
        <form action="/reviews/{{ $review->id }}" id="form_delete" method="post"> 
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick='return deleteReview(this);'>delete</span>]</p>
        </form>
            <p class='reviews'>{{ $review->review }}</p>
            <p class='chest'>胸：{{ $review->chest }}</p>
            <p class='arm'>腕：{{ $review->arm }}</p>
            <p class='shoulder'>肩：{{ $review->shoulder }}</p>
            <p class='belly'>腹：{{ $review->belly }}</p>
            <p class='back'>背中：{{ $review->back }}</p>
            <p class='leg'>脚：{{ $review->leg }}</p>
            <p class='comment'>コメント：{{ $review->comment }}</p>
            <p class='updated_at'>{{ $review->updated_at }}</p>
       @endforeach
        <div class='back'>[<a href='/'>戻る</a>]</div>
        <p class='create'>[<a href='/stores/{{ $store->id }}/reviews/create'>作成</a>]</p>
        <script>
        function deleteReview(e){
            'use strict';
            if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            }
        }    
        </script>
        </body>
    </html>
@endsection

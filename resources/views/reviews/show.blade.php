<h1>エニタイム各店舗詳細</h1>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class='review'>
            <h2 class='title'>{{ $review->title }}</h2>
            <p class='review'>総合評価：{{ $review->review }}</p>
            <p class='chest'>胸：{{ $review->chest }}</p>
            <p class='arm'>腕：{{ $review->arm }}</p>
            <p class='shoulder'>肩：{{ $review->shoulder }}</p>
            <p class='belly'>腹：{{ $review->belly }}</p>
            <p class='back'>背中：{{ $review->back }}</p>
            <p class='leg'>脚：{{ $review->leg }}</p>
            <p class='comment'>コメント：{{ $review->comment }}</p>
            <p class='updated_at'>{{ $review->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
        </body>
    </html>
@endsection

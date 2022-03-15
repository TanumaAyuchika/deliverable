<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')        
        <h1>エニタイム店舗情報</h1>
        <form action="/reviews" method="POST">
            {{ csrf_field() }}  
        　　<div class='review'>
            　　<h2>総合評価</h2>
            　　<input type="range" min="1" max="5">
            </div>
            <p class='chest'>
                <h3>胸</h3>
                <input type="range" min="1" max="5">
            </p>
            <p class='arm'>
                <h3>腕</h3>
                <input type="range" min="1" max="5">
            </p>
            <p class='shoulder'>
                <h3>肩</h3>
                <input type="range" min="1" max="5">
            </p>
            <p class='belly'>
                <h3>腹</h3>
                <input type="range" min="1" max="5">
            </p>
            <p class='back'>
                <h3>背中</h3>
                <input type="range" min="1" max="5">
            </p>
            <p class='leg'>
                <h3>脚</h3>
                <input type="range" min="1" max="5">
            </p>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="review[comment]" placeholder="コメント"></textarea>
            </div>
        </form>
        <div class='back'>[<a href='/'>戻る</a>]</div>
@endsection
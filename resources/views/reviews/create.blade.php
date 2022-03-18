<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')        
        <h1>エニタイム店舗情報</h1>
        <form action="/stores/{{ $store->id }}/reviews" method="POST">
            {{ csrf_field() }}  
        　　<div class='store'>
            　　<h2>総合評価</h2>
            　　<input name="review[review]" type="range" min="1" max="5">
            </div>
            <p class='chest'>
                <h3>胸</h3>
                <input name="review[chest]" type="range" min="1" max="5">
            </p>
            <p class='arm'>
                <h3>腕</h3>
                <input name="review[arm]" type="range" min="1" max="5">
            </p>
            <p class='shoulder'>
                <h3>肩</h3>
                <input name="review[shoulder]" type="range" min="1" max="5">
            </p>
            <p class='belly'>
                <h3>腹</h3>
                <input name="review[belly]" type="range" min="1" max="5">
            </p>
            <p class='back'>
                <h3>背中</h3>
                <input name="review[back]" type="range" min="1" max="5">
            </p>
            <p class='leg'>
                <h3>脚</h3>
                <input name="review[leg]"type="range" min="1" max="5">
            </p>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="review[comment]" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class='back'>[<a href='/stores/create'>戻る</a>]</div>
@endsection
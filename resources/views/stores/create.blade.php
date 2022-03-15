<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')        
        <h1>エニタイム店舗情報</h1>
        <form action="/stores" method="POST">
            {{ csrf_field() }}  
            <div class="name">
                <h2>店舗名</h2>
　　　　　　　　<input type="text" name="review[name]" placeholder="例）みなとみらい店"/>　　
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="review[address]" placeholder="神奈川県横浜市西区みなとみらい4-4-5 横浜アイマークプレイス 1F"/>
            </div>
            <input type="submit" value="保存"/>
        </form>   
        <div class='back'>[<a href='/'>戻る</a>]</div>
@endsection        
   
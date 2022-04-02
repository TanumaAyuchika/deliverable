<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')        
        <h1>エニタイム店舗情報</h1>
        <form action="/stores" method="POST">
            {{ csrf_field() }}  
           <div class="form-group">
   　　　　　 　　 <label for="exampleInputName1">店舗名</label>
    　　　 　　　<input name=store[name] type="text" class="form-control" id="exampleInputName1" placeholder="みなとみらい">
  　　　　 　</div>
 　　　　  　　 <div class="form-group">
              <label for="exampleInputAddress1">住所</label>
              <input name=store[address] type="text" class="form-control" id="exampleInputAddress1" placeholder="神奈川県横浜市西区みなとみらい4-4-5 横浜アイマークプレイス 1F">
           </div>
           <button type="submit" class="btn btn-default">次へ</button>
        </form>   
           <div class='back'>[<a href='/'>戻る</a>]</div>
@endsection        
   
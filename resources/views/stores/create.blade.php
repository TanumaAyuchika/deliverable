<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>エニタイム各店舗情報</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>エニタイム店舗情報</h1>
        <form action="/stores" method="POST">
            {{ csr_field() }}  
            <div class="name">
                <h2>店舗名</h2>
　　　　　　　　<input type="text" name="review[name]" placeholder="例）みなとみらい店"/>　　
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="review[address]" placeholder="神奈川県横浜市西区みなとみらい4-4-5 横浜アイマークプレイス 1F"/>
            </div>
            <input type="sumit" value="保存"/>
        </form>
        <div class='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>

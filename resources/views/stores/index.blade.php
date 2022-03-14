<title>エニタイム各店舗情報</title>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
        <h1>エニタイム店舗情報</h1>
        <p class='create'>[<a href='/stores/create'>店舗登録</a>]</p>
        <div class='stores'>
            @foreach ($stores as $store)
               <div class='store'>
                   <h2 class='name'> <a href="/stores/{{ $store->id }}/reviews">{{ $store->name }}</a></h2>
               </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $stores->links() }}
        </div>
@endsection


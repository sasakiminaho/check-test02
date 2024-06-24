@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<header class="products-title">
    <h2 class="list_title">商品一覧</h2>
    <div class="product_register">
        <a href="{{ asset('/products/register') }}" class="register-page">+商品を追加</a>
    </div>
</header>
<section class="list">
    <div class="products-list">
        <div class="search-area">
            <div class="search-box">
                <input class="search" type="search" name="search" placeholder="商品名で検索">
                <button type="submit" class="search-button" id="search">検索</button>
            </div>
            <div class="sort-area">
                <h3 class="sort-title">価格順で表示</h3>
                <select class="sort-select" name="price" id="price">
                    <option value="higher">高い順に表示</option>
                    <option value="lower">低い順に表示</option>
                </select>
            </div>
        </div>
        <div class="list-area">
            @foreach($products as $product)
            <div class="product-box">
                <a href="/products/{{ $product->id }}" class="detail-page">
                    <img src="{{ asset('/storage/'.$product->image) }}" width="100%" height="210px" alt="">
                    <div class="product-name_price">
                        <p class="product-name">{{ $product->name }}</p>
                        <p class="product-price">¥{{ $product->price }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination">
        {{$products->links()}}

    </div>
</section>
@endsection


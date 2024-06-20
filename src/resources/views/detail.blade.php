@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<section class="detail">
    <div class="detail-page">
        <nav class="navigation">
            <a href="{{ asset('/products') }}">商品一覧</a> > {{ $product->name }}
        </nav>
        <div class="detail_upper-part">
            <div class="product-image">
                <!-- 画像を表示しておいて、変更した場合に書き換えたい -->
                <input type="file">
            </div>
            <div class="detailed-inform">
                <div class="product-name">
                    <p class="name-title">商品名</p>
                    <input type="text" class="name-box" value="{{ $product->name }}" placeholder="商品名を入力">
                </div>
                <div class="product-price">
                    <p class="price-title">値段</p>
                    <input type="number" class="price-box" value="{{ $product->price }}" placeholder="値段を入力">
                </div>
                <div class="product-season">
                    <!-- 既存のデータをチェックボックスに表示しておきたい -->
                    <p class="season-title">季節</p>
                    <input type="checkbox" class="season-box" name="season" value="spring">春
                    <input type="checkbox" class="season-box" name="season" value="summer">夏
                    <input type="checkbox" class="season-box" name="season" value="autumn">秋
                    <input type="checkbox" class="season-box" name="season" value="winter">冬
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="product-description">
                <p class="description-title">商品説明</p>
                <textarea name="description" id="description" class="description-box" placeholder="商品説明を入力">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="button">
            <div class="back_page">
                <a href="{{ asset('/products') }}" class="back-button">戻る</a>
            </div>
            <div class="product-update">
                <!-- 変更保存機能を実装 -->
                <!-- バリデーションの実装 -->
                <input type="button" class="update-button" value="変更を保存">
            </div>
        </div>
    </div>
</section>
@endsection
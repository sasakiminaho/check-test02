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
        <form action="/products/{product_id}/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="detail_upper-part">
                <div class="product-image">
                    <input type="file" class="image-box" accept="image/*" name="image" id="image" value="{{ $product->image }}">
                    <div class="error">
                        @error('image')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="detailed-inform">
                    <div class="product-name">
                        <p class="name-title">商品名</p>
                        <input type="text" id="name" name="name" class="name-box" value="{{ $product->name }}" placeholder="商品名を入力">
                    </div>
                    <div class="error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="product-price">
                        <p class="price-title">値段</p>
                        <input type="number"  id="price" name="price" class="price-box" value="{{ $product->price }}" placeholder="値段を入力">
                    </div>
                    <div class="error">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="product-season">
                        <p class="season-title">季節</p>
                        @foreach(['春','夏','秋','冬'] as $key => $seasonName)
                        <label>
                            <input type="checkbox" id="seasons" class="season-box" name="seasons[]" value="{{ $key }}" {{ $seasons->contains('season_id', $key + 1) ? 'checked=="checked' : '' }}>{{ $seasonName }}
                        </label>
                        @endforeach
                    </div>
                    <div class="error">
                        @error('season')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="bottom-part">
                <div class="product-description">
                    <p class="description-title">商品説明</p>
                    <textarea name="description" id="description" class="description-box" placeholder="商品説明を入力">{{ $product->description }}</textarea>
                </div>
                <div class="error">
                        @error('description')
                        {{ $message }}
                        @enderror
                    </div>
            </div>
            <input type="hidden" id="id" name="id" value="{{ $product->id}}">
            <div class="button">
                <div class="back_page">
                    <a href="{{ asset('/products') }}" class="back-button">戻る</a>
                </div>
                <div class="product-update">
                    <button type="submit" class="update-button">変更を保存</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
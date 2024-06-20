@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<section class="register">
    <div class="register-page">
        <h2 class="register-title">
        商品登録
        </h2>
        <form action="">
            @csrf
            <div class="input-area">
                <div class="name-input">
                    <p class="name-title">商品名
                        <span class="require">必須</span>
                    </p>
                    <input type="text" class="name-box" placeholder="商品名を入力">
                </div>
                <div class="price-input">
                    <p class="price-title">値段
                        <span class="require">必須</span>
                    </p>
                    <input type="number" class="price-box" placeholder="値段を入力">
                </div>
                <div class="image-input">
                    <p class="image-title">商品画像
                        <span class="require">必須</span>
                    </p>
                    <!-- 画像ファイルを選択したら表示されるようにする -->
                    <input type="file" class="image-box">
                </div>
                <div class="season-input">
                    <p class="season-title">季節
                        <span class="require">必須</span>
                        <span class="multiple">複数可能</span>
                    </p>
                    <!-- チェックボックスを丸くしたい -->
                    <input type="checkbox" class="season-box" name="season" value="spring">春
                    <input type="checkbox" class="season-box" name="season" value="summer">夏
                    <input type="checkbox" class="season-box" name="season" value="autumn">秋
                    <input type="checkbox" class="season-box" name="season" value="winter">冬
                </div>
                <div class="description-input">
                    <p class="description-title">商品説明
                        <span class="require">必須</span>
                    </p>
                    <textarea name="description" id="description" class="description-box" placeholder="商品の説明を入力"></textarea>
                </div>
                <div class="button">
                    <div class="back_page">
                        <a href="{{ asset('/products') }}" class="back-button">戻る</a>
                    </div>
                    <div class="product-register">
                        <!-- 登録機能の実装 -->
                        <!-- バリデーションの実装 -->
                        <input type="button" class="register-button" value="登録">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
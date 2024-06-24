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
        <form action="/products/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-area">
                <div class="name-input">
                    <p class="name-title">商品名
                        <span class="require">必須</span>
                    </p>
                    <input type="text" name="name" id="name" class="name-box" placeholder="商品名を入力">
                    <div class="error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="price-input">
                    <p class="price-title">値段
                        <span class="require">必須</span>
                    </p>
                    <input type="number" name="price" id="price" class="price-box" placeholder="値段を入力">
                    <div class="error">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="image-input">
                    <p class="image-title">商品画像
                        <span class="require">必須</span>
                    </p>
                    <img id="preview">
                    <input type="file" class="image-box" accept="image/*" name="image" id="image" >
                    <div class="error">
                        @error('image')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="season-input">
                    <p class="season-title">季節
                        <span class="require">必須</span>
                        <span class="multiple">複数可能</span>
                    </p>
                    <input type="checkbox" class="season-box" name="season[]" value="1">春
                    <input type="checkbox" class="season-box" name="season[]" value="2">夏
                    <input type="checkbox" class="season-box" name="season[]" value="3">秋
                    <input type="checkbox" class="season-box" name="season[]" value="4">冬
                    <div class="error">
                        @error('season')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="description-input">
                    <p class="description-title">商品説明
                        <span class="require">必須</span>
                    </p>
                    <textarea name="description" id="description" class="description-box" placeholder="商品の説明を入力"></textarea>
                    <div class="error">
                        @error('description')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="button">
                    <div class="back_page">
                        <a href="{{ asset('/products') }}" class="back-button">戻る</a>
                    </div>
                    <div class="product-register">
                        <button type="submit" class="register-button">登録</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    const image = document.getElementById('image');
    image.addEventListener('change', (e) => {
        const file = e.target.files[0];

        const fileReader = new FileReader();
        fileReader.readAsDataURL(file);

        fileReader.addEventListener('load', (e) => {
            const imgElm = document.createElement('img');
            imgElm.src = e.target.result;

            const targetElm = document.getElementById('preview');
            targetElm.appendChild(imgElm);
        });
    });
</script>
@endsection
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
    <title>mogitate</title>
</head>
<body>
    <section class="title">
        <h1 class="title-name">mogitate</h1>
    </section>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
    <script>
        'use strict';
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
</body>
</html>
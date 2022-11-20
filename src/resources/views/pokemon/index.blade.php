<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="main-menu">
    <ul class="menu">
        <li class="menu-item"><img src="{{ asset('img/ball_lb.png')}}"><a href="{{ route('pokemon.hand', ['status' => 1]) }}">ポケモンをそだてる</a></li>
        <li class="menu-item"><img src="{{ asset('img/ball_lb.png')}}"><a href="{{ route('pokemon.country') }}">ポケモンをつかまえる</a></li>
        <li class="menu-item"><img src="{{ asset('img/ball_lb.png')}}"><a href="{{ route('pokemon.box') }}">ボックスをみる</a></li>
        <li class="menu-item"><img src="{{ asset('img/ball_lb.png')}}"><a href="{{ route('pokemon.hand', ['status' => 2])}}">てもちをみる</a></li>
    </ul>
    </div>
</body>

</html>
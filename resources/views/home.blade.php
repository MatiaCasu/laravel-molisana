<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molisana Laravel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
        <!-- Logo -->
        <img class="logo" src="{{ asset('img/marchio-sito-test.png')}}" alt="">
        <!-- /Logo -->
        <!-- Nav Bar -->
        <ul class="main-nav list-inline">
            <li> <a href="">Home</a> </li>
            <li> <a href="">Prodotti</a> </li>
            <li> <a href="">News</a> </li>
        </ul>
        <!-- /Nav Bar -->
        </header>
        <main>
            <div class="full-bg-container">
                <div class="main-container">
                    <!-- Liste pasta -->
                    <h2>LE LUNGHE</h2>
                    <ul class="pasta-list">
                        @foreach ($lunga as $pastaLunga)
                        <li>
                            <a href=""> <img src="{{$pastaLunga['src']}}" alt=""> </a>
                        </li>
                        @endforeach
                    </ul>
                    <h2>LE CORTE</h2>
                    <ul class="pasta-list">
                        @foreach ($corta as $pastaCorta)
                        <li>
                            <a href=""> <img src="{{$pastaCorta['src']}}" alt=""> </a>
                        </li>
                        @endforeach
                    </ul>
                    <h2>LE CORTISSIME</h2>
                    <ul class="pasta-list">
                        @foreach ($cortissima as $pastaCortissima)
                        <li> 
                            <a href=""> <img src="{{$pastaCortissima['src']}}" alt=""> </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- /Liste pasta -->
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>
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
            <div class="main-container flex-box">
                <div class="left">
                    <!-- Logo Footer -->
                    <img class="logo" src="{{ asset('img/marchio-sito-test.png')}}" alt="">
                    <!-- /Logo Footer -->
                    <!-- Dati e Indirizzi -->
                    <div class="address-info">
                        <p>Ragione sociale: La Molisana S.P.A.<br>
                        Sede legale:Contrada Colle delle Api, 100/A<br>
                        86100 - Campobasso (CB) <br>
                        Pec. lamolisana (CB) <br>
                        Tel: +39 0874 4981 <br>
                        Fax: +39 0874 629584 <br>
                        info@lamolisana.it (per segnalazioni degli utenti) <br>
                        commerciale@lamolisana.it <br>
                        export@lamolisana.it <br>
                        numero verde 800818081 <br>
                        telefono 3801292455 <br>
                    </p>
                    </div>
                    <!-- /Dati e Indirizzi -->
                </div>
                <div class="center">
                    <!-- link footer center -->
                    <h5>Pastificio</h5>
                    <ul>
                        <li> <a href="">Il Pastificio</a> </li>
                        <li> <a href="">Grano decorticato a pietra</a> </li>
                        <li> <a href="">Il Molise c'è</a> </li>
                        <li> <a href="">Filiera Integrata</a> </li>
                        <li> <a href="">100 anni di pasta</a> </li>
                        <li> <a href="">Sartoria della pasta</a> </li>
                        <li> <a href="">Spaghetto Quadrato</a> </li>
                        <li> <a href="">Le Persone</a> </li>
                    </ul>
                    <h5>Prodotti</h5>
                    <ul>
                        <li> <a href="">Le Classiche</a> </li>
                        <li> <a href="">Le Integrali</a> </li>
                        <li> <a href="">Le Speciali</a> </li>
                        <li> <a href="">Le Biologiche</a> </li>
                        <li> <a href="">Le Gluten-Free</a> </li>
                        <li> <a href="">Le Semole</a> </li>
                        <li> <a href="">Le Extra di Lusso</a> </li>
                    </ul>
                    <!-- /link footer center -->
                </div>
                <div class="right">
                    <!-- link footer right -->
                    <h5>Collezione da chef</h5>
                    <ul>
                        <li> <a href="">Collezione da Chef</a> </li>
                        <li> <a href="">Grandi Cucine</a> </li>
                        <li> <a href="">Biologiche</a> </li>
                        <li> <a href="">Quadrate</a> </li>
                    </ul>
                    <!-- /link footer right -->
                </div>
            </div>
            <!-- footer bottom bg -->
            <div class="full-bg-container"></div>
            <!-- /footer bottom bg -->
        </footer>
    </div>
</body>
</html>
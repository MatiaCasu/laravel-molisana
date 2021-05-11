<header>
    <!-- Logo -->
    <img class="logo" src="{{ asset('img/marchio-sito-test.png')}}" alt="">
    <!-- /Logo -->
    <!-- Nav Bar -->
    <ul class="main-nav list-inline">
        <li> <a class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}" href="/">Home</a> </li>
        <li> <a class="{{Route::getCurrentRoute()->getName() == 'products' || Route::getCurrentRoute()->getName() == 'single-product' ? 'active' : ''}}" href="/products">Prodotti</a> </li>
        <li> <a class="" href="">News</a> </li>
    </ul>
    <!-- /Nav Bar -->
</header>

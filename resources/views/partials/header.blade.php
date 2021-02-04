<header>
    <img src="{{ asset('img/marchio-sito-test.png') }}" alt="molisana-logo">
    <ul>
        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">HOME</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'prodotto' ? 'active' : '' }}"><a href="{{ route('prodotto', [ 'idProdotto' => 0 ] )}}">PRODOTTI</a></li>
        <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
            <a href="{{ route('news') }}">NEWS</a>
        </li>
    </ul>
</header>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        <main>
            <div class="container">
            <h2>Le Lunghe</h2>
                <div class="cards">
                  @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>

                <h2>Le Corte</h2>
                <div class="cards">
                  @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>

                <h2>Le Cortissime</h2>
                <div class="cards">
                  @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>

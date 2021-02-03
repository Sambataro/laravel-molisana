@extends('layouts.layout')

@section('content')
        <main>
            <div class="container">
                <h2>LE LUNGHE</h2>
                <div class="cards">
                  @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="text-card"><a href=""><h4>{{$pasta['titolo']}}</h4></a></div>
                    </div>
                    @endforeach
                </div>

                <h2>LE CORTE</h2>
                <div class="cards">
                  @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="text-card"><a href=""><h4>{{$pasta['titolo']}}</h4></a></div>
                    </div>
                    @endforeach
                </div>

                <h2>LE CORTISSIME</h2>
                <div class="cards">
                  @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                        <div class="text-card"><a href=""><h4>{{$pasta['titolo']}}</h4></a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
            
@endsection
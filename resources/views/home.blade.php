@extends('layouts.layout')

@section('content')

            <div class="container">
            <h2>LE LUNGHE</h2>
                <div class="cards">
                  @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>

                <h2>LE CORTE</h2>
                <div class="cards">
                  @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>

                <h2>LE CORTISSIME</h2>
                <div class="cards">
                  @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>

@endsection
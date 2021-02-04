@extends('layouts.layout')

@section('content')
        <main>
            <div class="container">
            @include('partials.cards' , [
            'title' => 'LE LUNGHE',
            'pastaArray' => $lunghe
            ])

            @include('partials.cards' , [
            'title' => 'LE CORTE',
            'pastaArray' => $corte
            ])

            @include('partials.cards' , [
            'title' => 'LE CORTISSIME',
            'pastaArray' => $cortissime
            ])
            </div>
        </main>
            
@endsection
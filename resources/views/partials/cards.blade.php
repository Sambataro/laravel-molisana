<h2>{{ $title }}</h2>
<div class="cards">
    @foreach($pastaArray as $pasta)
        <div class="card">
            <img src="{{$pasta['src']}}" alt="">
            <div class="text-card">
                <a href="{{ route('product', ['id' => $pasta['id']]) }}"><h4>{{$pasta['titolo']}}</h4></a>
            </div>
        </div>
    @endforeach
</div>
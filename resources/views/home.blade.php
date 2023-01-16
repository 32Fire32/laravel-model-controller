@extends('layout.main')

@section('main-content')
    <div class="container text-center">
        <h1>I NOSTRI LIBRI</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="ms-card col-md-4">
                    <h4>{{ $movie->title }}</h4>
                    <h5>Titolo originale: {{ $movie->title }} </h5>
                    <h6>Nazionalità: {{ $movie->nationality }}</h6>
                    <h6>Del: {{ $movie->date }} </h6>
                    <span>Voto: {{ $movie->vote }}</span>
                </div>
            @endforeach

        </div>
    </div>
@endsection

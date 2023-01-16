@extends('layout.main')

@section('main-content')
    <div class="container text-center">
        <h1>Main Content</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card col-md-4 p-2">
                    <h4>{{ $movie->title }}</h4>
                    <h5>Titolo originale: {{ $movie->title }} </h5>
                    <span>Nazionalità: {{ $movie->nationality }}</span>
                    <span>Del: {{ $movie->date }} </span>
                    <span>Voto: {{ $movie->vote }}</span>
                </div>
            @endforeach

        </div>
    </div>
@endsection

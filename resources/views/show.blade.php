@extends('layout.main')

@section('main-content')
    <div class="container text-center">
        <h1>IL FILM IN DETTAGLIO</h1>
        <div class="row justify-content-center p-5">
            <div class="ms-card">
                <h4>{{ $movie->title }}</h4>
                <h5>Titolo originale: {{ $movie->original_title }} </h5>
                <h6>Nazionalità: {{ $movie->nationality }}</h6>
                <h6>Del: {{ $movie->date }} </h6>
                <span>Voto: {{ $movie->vote }}</span>
            </div>
        </div>
    </div>
@endsection

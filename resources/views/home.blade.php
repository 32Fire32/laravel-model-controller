@extends('layout.main')

@section('main-content')
    <div class="container text-center">
        <h1>I NOSTRI FILM:</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="ms-card col-md-4">
                    <h4>{{ $movie->title }}</h4>
                    <a href="{{ route('show', $loop->index) }}">Maggiori dettagli</a>
                </div>
            @endforeach

        </div>
    </div>
@endsection

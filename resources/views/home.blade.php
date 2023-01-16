@extends('layout.main')

@section('main-content')
    <h1>Main Content</h1>
    {{-- @dd($movies) --}}
    @foreach ($movies as $movie)
        <p>{{ $movie->title }}</p>
    @endforeach
@endsection

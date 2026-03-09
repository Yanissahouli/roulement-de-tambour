@extends('layouts.app')
@section('title', 'Cinéastes - CineForAll')
@section('content')
    <h2 class="section-title">Nos Cinéastes</h2>
    <section class="content-simple">
        @foreach($cineastes as $cineaste)
            <div class="movie-card">
                <img src="{{ asset('imgCineaste/' . $cineaste->imgCineaste) }}" alt="{{ $cineaste->nomCineaste }}">
                <h3>{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }}</h3>
                <p>{{ $cineaste->natCineaste }}</p>
            </div>
        @endforeach
    </section>
@endsection

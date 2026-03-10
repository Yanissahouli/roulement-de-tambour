@extends('layouts.app')
@section('title', 'Cinéastes - CineForAll')
@section('content')
    <h2 class="section-title">Nos Cinéastes</h2>
    <section class="content-simple">
        @foreach($cineastes as $cineaste)
            <div class="movie-card">
                <a href="/cineastes/{{ $cineaste->idCineaste }}">
                    <img src="{{ asset('imgCineaste/' . $cineaste->imgCineaste) }}" alt="{{ $cineaste->nomCineaste }}">
                </a>
                <h3>{{ $cineaste->preCineaste }} {{ $cineaste->nomCineaste }}</h3>
                <p>{{ $cineaste->natCineaste }}</p>
            </div>
        @endforeach
    </section>
@endsection

@extends('layouts.app')
@section('title', 'CineForAll')
@section('content')
<h2 class="section-title">Dernières sorties</h2>
<section class="movies">
    @foreach($films as $film)
<div class="movie-card">
    <a href="{{ route('film.show', $film->idFilm) }}">
        <img src="{{ asset('img/' . $film->imgFilm) }}" alt="{{ $film->titFilm }}">
    <div class="rating">⭐ {{ $film->annsorFilm }}</div>
    <div class="duration">🕒 {{ $film->durFilm }} min</div>
</div>
@endforeach
</section>
@endsection 
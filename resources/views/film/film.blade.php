@extends('layouts.app')
@section('title', 'Films - CineForAll')
@section('content')
<h2 class="section-title">Nos Films</h2>

@auth
    @if(auth()->user()->isAdmin())
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('film.create') }}" class="connexion-btn">+ Ajouter un film</a>
    </div>
    @endif
@endauth

<section class="movies">
    @foreach($films as $film)
    <div class="movie-card">
        <a href="{{ route('film.show', $film->idFilm) }}">
            <img src="{{ asset('img/' . $film->imgFilm) }}" alt="{{ $film->titFilm }}">
        </a>
        <div class="rating">⭐ {{ $film->annsorFilm }}</div>
        <div class="duration">🕒 {{ $film->durFilm }} min</div>
    </div>
    @endforeach
</section>
@endsection
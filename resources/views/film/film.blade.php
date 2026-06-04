@extends('layouts.app')
@section('title', 'Films - CineForAll')
@section('content')
<h2 class="section-title">Nos Films</h2>

@auth
    @if(auth()->user()->role === 'admin')
        <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('film.create') }}" class="connexion-btn">+ Ajouter un film</a>
    </div>
    @endif
@endauth

<form method="GET" action="{{ route('film.index') }}" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 30px;">
    <input type="text" name="search" placeholder="Rechercher un film..." value="{{ request('search') }}"
        style="padding: 10px 15px; border-radius: 8px; border: 1px solid #991917; background: #0f1b2d; color: #e0e0e0; font-size: 14px; min-width: 220px;">

    <select name="genre" style="padding: 10px 15px; border-radius: 8px; border: 1px solid #991917; background: #0f1b2d; color: #e0e0e0; font-size: 14px;">
        <option value="">Tous les genres</option>
        @foreach($genres as $genre)
            <option value="{{ $genre->idGen }}" {{ request('genre') == $genre->idGen ? 'selected' : '' }}>
                {{ $genre->libGen }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="connexion-btn">Rechercher</button>

    @if(request('search') || request('genre'))
        <a href="{{ route('film.index') }}" class="connexion-btn" style="background: #333;">Réinitialiser</a>
    @endif
</form>

@if($films->isEmpty())
    <p style="text-align: center; color: #aaa; margin-top: 40px;">Aucun film trouvé.</p>
@else
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
@endif

@endsection

@extends('layouts.app')
@section('title', '{{ $film->titFilm }} - CineForAll')
@section('content')

<h2 class="section-title">{{ $film->titFilm }}</h2>

<div class="actor-container">
    <div class="actor-image">
        <img src="{{ asset('img/' . $film->imgFilm) }}" alt="{{ $film->titFilm }}">
    </div>
    <div class="actor-info">
        <h3>{{ $film->titFilm }}</h3>
        <ul>
            <li><strong>Description :</strong> {{ $film->desFilm }}</li>
            <li><strong>Année de sortie :</strong> {{ $film->annsorFilm }}</li>
            <li><strong>Langue :</strong> {{ $film->lanFilm }}</li>
            <li><strong>Durée :</strong> {{ $film->durFilm }}</li>
        </ul>

        <h3 style="margin-top: 30px; font-family: 'Orbitron', sans-serif; letter-spacing: 2px;">SÉANCES DISPONIBLES</h3>
        <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-top: 15px;">
            @forelse($film->seances as $seance)
            <a href="{{ route('login') }}" style="text-decoration: none;">
            <div style="background: #0f3460; border: 1px solid #991917; border-radius: 8px; padding: 15px 20px; min-width: 200px;">
                <p style="font-weight: 700; color: #e0e0e0; font-size: 16px;">{{ $seance->salle->cinema->nomCin }}</p>
                <p style="color: #aaa; margin-top: 8px;">📅 {{ $seance->dateSeance }}</p>
                <p style="color: #aaa; margin-top: 5px;">💰 {{ $seance->tarifSeance }}€</p>
            </div>
            @empty
            <p>Aucune séance disponible.</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
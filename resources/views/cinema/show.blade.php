@extends('layouts.app')
@section('title', '{{ $cinema->nomCin }} - CineForAll')
@section('content')

<h2 class="section-title">{{ $cinema->nomCin }}</h2>

<div class="actor-container">
    <div class="actor-info">
        <p>📍 {{ $cinema->adrCin }}, {{ $cinema->vilCin }} {{ $cinema->cpCin }}</p>

        <h3 style="margin-top: 30px; font-family: 'Orbitron', sans-serif; letter-spacing: 2px;">FILMS DISPONIBLES</h3>
        <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-top: 15px;">
            @forelse($cinema->films as $film)
            <a href="{{ route('film.show', $film->idFilm) }}" style="text-decoration: none;">
            <div style="background: #0f3460; border: 1px solid #991917; border-radius: 8px; padding: 15px 20px; min-width: 200px; cursor: pointer;">
                    <p style="font-weight: 700; color: #e0e0e0; font-size: 16px;">{{ $film->titFilm }}</p>
                    <p style="color: #aaa; margin-top: 8px;">🕒 {{ $film->durFilm }}</p>
                    <p style="color: #aaa; margin-top: 5px;">📅 {{ $film->annsorFilm }}</p>
                    <img src="{{ asset('img/' . $film->imgFilm) }}" alt="{{ $film->titFilm }}" style="width: 150px; height: 220px; object-fit: cover;">
                </div>
            </a>
            @empty
            <p>Aucun film disponible pour ce cinéma.</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
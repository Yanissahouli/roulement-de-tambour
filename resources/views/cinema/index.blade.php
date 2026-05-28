@extends('layouts.app')
@section('title', 'Nos Cinémas - CineForAll')
@section('content')
<h2 class="section-title">Nos Cinémas</h2>

@auth
    @if(auth()->user()->role === 'admin')
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('cinema.create') }}" class="connexion-btn">+ Ajouter un cinéma</a>
    </div>
    @endif
@endauth

<section class="content-simple">
    @foreach($cinemas as $cinema)
    <div class="movie-card">
        <h3>{{ $cinema->nomCin }}</h3>
        <p> {{ $cinema->vilCin }}</p>
        <p>{{ $cinema->adrCin }}, {{ $cinema->cpCin }}</p>
        <a href="{{ route('cinema.show', $cinema->idCin) }}">Voir les séances</a>
    </div>
    @endforeach
</section>
@endsection
@extends('layouts.app')
@section('title', 'Cinéastes - CineForAll')
@section('content')
    <h2 class="section-title">Nos Cinéastes</h2>

    <form method="GET" action="{{ route('cineaste.index') }}" style="display: flex; gap: 10px; justify-content: center; margin-bottom: 30px;">
        <input type="text" name="search" placeholder="Rechercher un cinéaste..." value="{{ request('search') }}"
            style="padding: 10px 15px; border-radius: 8px; border: 1px solid #991917; background: #0f1b2d; color: #e0e0e0; font-size: 14px; min-width: 250px;">
        <button type="submit" class="connexion-btn">Rechercher</button>
        @if(request('search'))
            <a href="{{ route('cineaste.index') }}" class="connexion-btn" style="background: #333;">Réinitialiser</a>
        @endif
    </form>

    @if($cineastes->isEmpty())
        <p style="text-align: center; color: #aaa; margin-top: 40px;">Aucun cinéaste trouvé.</p>
    @else
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
    @endif
@endsection

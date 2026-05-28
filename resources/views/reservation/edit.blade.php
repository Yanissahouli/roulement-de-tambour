@extends('layouts.app')
@section('title', 'Modifier ma réservation - CineForAll')
@section('content')

    <div class="form-container">
        <h2 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 25px; text-align: center;">MODIFIER MA RÉSERVATION</h2>

        <p style="color: #aaa; text-align: center; margin-bottom: 20px;">{{ $seance->nomSeance }} - {{ $seance->dateSeance }}</p>

        @if(session('error'))
            <div style="background: #7a1210; color: white; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/reservation/{{ $seance->idSeance }}/update">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label style="color: #aaa;">Nombre de personnes (max {{ min(10, $placesDisponibles) }})</label>
                <input type="number" name="nbPers" min="1" max="{{ min(10, $placesDisponibles) }}" value="{{ $reservation->nbPers }}" required>
            </div>
            <button type="submit" class="connexion-btn" style="width: 100%; margin-top: 10px;">MODIFIER</button>
            <a href="/users" style="display: block; text-align: center; margin-top: 15px; color: #991917;">Annuler</a>
        </form>
    </div>

@endsection

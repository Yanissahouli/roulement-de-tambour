@extends('layouts.app')
@section('title', 'Mon Espace - CineForAll')
@section('content')

<h2 class="section-title">MON ESPACE</h2>

<div class="actor-container">
    <div class="actor-info">
        <h3 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 15px;">{{ $user->name }}</h3>
        <p style="color: #aaa;">📧 {{ $user->email }}</p>

        <h3 style="font-family: 'Orbitron', sans-serif; margin-top: 30px; margin-bottom: 15px; letter-spacing: 2px;">MES RÉSERVATIONS</h3>

        <div style="display: flex; flex-wrap: wrap; gap: 15px;">
            @forelse($reservations as $reservation)
            <div style="background: #0f3460; border: 1px solid #991917; border-radius: 8px; padding: 15px 20px; min-width: 200px;">
                <p style="font-weight: 700; color: #e0e0e0;">{{ $reservation->seance->nomSeance }}</p>
                <p style="color: #aaa; margin-top: 8px;">📅 {{ $reservation->seance->dateSeance }}</p>
                <p style="color: #aaa; margin-top: 5px;">👥 {{ $reservation->nbPers }} personne(s)</p>
                <p style="color: #aaa; margin-top: 5px;">💰 {{ $reservation->seance->tarifSeance }}€</p>
            </div>
            @empty
            <p style="color: #aaa;">Aucune réservation pour le moment.</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
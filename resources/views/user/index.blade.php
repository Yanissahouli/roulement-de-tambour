@extends('layouts.app')
@section('title', 'Mon Espace - CineForAll')
@section('content')

    <h2 class="section-title">MON ESPACE</h2>

    <div class="actor-container">
        <div class="actor-info">
            <h3 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 15px;">{{ $user->name }}</h3>
            <p style="color: #aaa;">📧 {{ $user->email }}</p>

            <h3 style="font-family: 'Orbitron', sans-serif; margin-top: 30px; margin-bottom: 15px; letter-spacing: 2px;">MES RÉSERVATIONS</h3>

            @if(session('success'))
                <div style="background: #1a5c1a; color: white; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div style="background: #7a1210; color: white; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
                    {{ session('error') }}
                </div>
            @endif

            <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                @forelse($reservations as $reservation)
                    <div style="background: #0f3460; border: 1px solid #991917; border-radius: 8px; padding: 15px 20px; min-width: 200px;">
                        <p style="font-weight: 700; color: #e0e0e0;">{{ $reservation->seance->films->first()->titFilm ?? $reservation->seance->nomSeance }}</p>
                        <p style="color: #aaa; margin-top: 8px;">📅 {{ $reservation->seance->dateSeance }}</p>
                        <p style="color: #aaa; margin-top: 5px;">👥 {{ $reservation->nbPers }} personne(s)</p>
                        <p style="color: #aaa; margin-top: 5px;">💰 {{ $reservation->seance->tarifSeance }}€</p>

                        @if(\Carbon\Carbon::parse($reservation->seance->dateSeance)->subHours(2)->isFuture())
                            <a href="/reservation/{{ $reservation->idSeance }}/edit"
                               style="display: inline-block; margin-top: 10px; background: #0f3460; color: white; border: 1px solid #991917; padding: 5px 10px; border-radius: 5px;">
                                ✏️ Modifier
                            </a>
                            <form method="POST" action="/reservation/{{ $reservation->idSeance }}/delete" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="margin-top: 10px; background: #991917; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;"
                                        onclick="return confirm('Supprimer cette réservation ?')">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        @else
                            <p style="color: #991917; margin-top: 10px; font-size: 12px;">❌ Modification/Suppression impossible moins de 2h avant la séance</p>
                        @endif
                    </div>
                @empty
                    <p style="color: #aaa;">Aucune réservation pour le moment.</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

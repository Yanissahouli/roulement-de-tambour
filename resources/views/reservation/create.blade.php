@extends('layouts.app')
@section('title', 'Réservation - CineForAll')
@section('content')



<div class="form-container">
    <h2 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 25px; text-align: center;">RÉSERVATION</h2>

    @if(session('error'))
    <div style="background: #7a1210; color: white; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
        {{ session('error') }}
    </div>
    @endif

    <div style="background: #0f3460; border: 1px solid #991917; border-radius: 8px; padding: 15px 20px; margin-bottom: 25px;">
        <p style="font-weight: 700; color: #e0e0e0; font-size: 16px;">{{ $seance->nomSeance }}</p>
        <p style="color: #aaa; margin-top: 8px;">📅 {{ $seance->dateSeance }}</p>
        <p style="color: #aaa; margin-top: 5px;">💰 {{ $seance->tarifSeance }}€</p>
    </div>

    <form method="POST" action="/reservation">
        @csrf
        <input type="hidden" name="seance_id" value="{{ $seance->idSeance }}">
        <div class="form-group">
            <label style="color: #aaa;">Nombre de personnes</label>
            <input type="number" name="nbPers" min="1" max="10" value="1" required>
        </div>
        <button type="submit" class="connexion-btn" style="width: 100%; margin-top: 10px;">CONFIRMER LA RÉSERVATION</button>
    </form>
</div>

@endsection 
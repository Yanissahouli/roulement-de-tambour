@extends('layouts.app')
@section('title', 'Ajouter un film - CineForAll')
@section('content')

<div class="form-container">
    <h2 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 25px; text-align: center;">AJOUTER UN FILM</h2>

    @if ($errors->any())
    <ul style="color: #ff4444; margin-bottom: 20px;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('film.store') }}" enctype="multipart/form-data">
        @csrf

        <h3 style="color: #991917; margin-bottom: 15px; font-family: 'Orbitron', sans-serif;">FILM</h3>

        <div class="form-group">
            <label style="color: #aaa;">Titre</label>
            <input type="text" name="titFilm" value="{{ old('titFilm') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Description</label>
            <input type="text" name="desFilm" value="{{ old('desFilm') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Date de sortie</label>
            <input type="date" name="annsorFilm" value="{{ old('annsorFilm') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Langue</label>
            <input type="text" name="lanFilm" value="{{ old('lanFilm') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Durée (ex: 02:28:00)</label>
            <input type="text" name="durFilm" value="{{ old('durFilm') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Image du film</label>
            <input type="file" name="imgFilm" accept="image/*" required>
        </div>

        <h3 style="color: #991917; margin-top: 30px; margin-bottom: 15px; font-family: 'Orbitron', sans-serif;">SÉANCE</h3>

        <div class="form-group">
            <label style="color: #aaa;">Nom de la séance</label>
            <input type="text" name="nomSeance" value="{{ old('nomSeance') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Tarif (€)</label>
            <input type="number" step="0.01" name="tarifSeance" value="{{ old('tarifSeance') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Date et heure</label>
            <input type="datetime-local" name="dateSeance" value="{{ old('dateSeance') }}" required>
        </div>
        <div class="form-group">
            <label style="color: #aaa;">Salle</label>
            <select name="idSal" style="width: 100%; padding: 10px; background: #2a2a3e; color: white; border: none; border-radius: 5px;">
                @foreach($salles as $salle)
                <option value="{{ $salle->idSal }}">{{ $salle->cinema->nomCin }} - {{ $salle->nomSalle }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="connexion-btn" style="width: 100%; margin-top: 20px;">AJOUTER</button>
    </form>
</div>

@endsection
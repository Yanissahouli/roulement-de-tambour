@extends('layouts.app')
@section('title', 'Modifier - {{ $film->titFilm }}')
@section('content')
<h2 class="section-title">✏️ MODIFIER UN FILM</h2>
<div class="form-container">
    <form method="POST" action="{{ route('film.update', $film->idFilm) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titFilm" value="{{ old('titFilm', $film->titFilm) }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="desFilm" rows="4" required>{{ old('desFilm', $film->desFilm) }}</textarea>
        </div>
        <div class="form-group">
            <label>Année de sortie</label>
            <input type="date" name="annsorFilm" value="{{ old('annsorFilm', $film->annsorFilm) }}" required>
        </div>
        <div class="form-group">
            <label>Langue</label>
            <input type="text" name="lanFilm" value="{{ old('lanFilm', $film->lanFilm) }}" required>
        </div>
        <div class="form-group">
            <label>Durée</label>
            <input type="text" name="durFilm" value="{{ old('durFilm', $film->durFilm) }}" required>
        </div>
        <div class="form-group">
            <label>Image actuelle</label>
            <div style="margin: 10px 0;">
                <img src="{{ asset('img/' . $film->imgFilm) }}" alt="{{ $film->titFilm }}"
                    style="max-width: 200px; border-radius: 8px; border: 1px solid #991917;">
            </div>
        </div>  

        <div style="display: flex; gap: 15px; margin-top: 30px;">
            <button type="submit" class="connexion-btn">💾 Sauvegarder</button>
            <a href="{{ route('film.show', $film->idFilm) }}" class="connexion-btn"
                style="background-color: #444;">
                ❌ Annuler
            </a>
        </div>
    </form>
</div>
@endsection
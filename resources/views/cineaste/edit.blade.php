@extends('layouts.app')
@section('title', 'Modifier un cinéaste')
@section('content')
<h2 class="section-title">MODIFIER UN CINÉASTE</h2>
<div class="form-container">
    <form method="POST" action="{{ route('cineaste.update', $cineaste->idCineaste) }}" enctype="multipart/form-data">
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
            <label>Prénom</label>
            <input type="text" name="preCineaste" value="{{ old('preCineaste', $cineaste->preCineaste) }}" required>
        </div>
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nomCineaste" value="{{ old('nomCineaste', $cineaste->nomCineaste) }}" required>
        </div>
        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="datNaiCineaste" value="{{ old('datNaiCineaste', $cineaste->datNaiCineaste) }}" required>
        </div>
        <div class="form-group">
            <label>Nationalité</label>
            <input type="text" name="natCineaste" value="{{ old('natCineaste', $cineaste->natCineaste) }}" required>
        </div>
        <div class="form-group">
            <label>Biographie</label>
            <textarea name="bioCineaste" rows="4">{{ old('bioCineaste', $cineaste->bioCineaste) }}</textarea>
        </div>
        <div class="form-group">
            <label>Image actuelle</label>
            <div style="margin: 10px 0;">
                <img src="{{ asset('imgCineaste/' . $cineaste->imgCineaste) }}" alt="{{ $cineaste->nomCineaste }}"
                    style="max-width: 150px; border-radius: 8px; border: 1px solid #991917;">
            </div>
            <label>Changer l'image (optionnel)</label>
            <input type="file" name="imgCineaste" accept="image/*">
        </div>
        <div style="display: flex; gap: 15px; margin-top: 30px;">
            <button type="submit" class="connexion-btn"> Sauvegarder</button>
            <a href="/cineastes/{{ $cineaste->idCineaste }}" class="connexion-btn" style="background-color: #444;"> Annuler</a>
        </div>
    </form>
</div>
@endsection
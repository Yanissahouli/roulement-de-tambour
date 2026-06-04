@extends('layouts.app')
@section('title', 'Ajouter un cinéaste')
@section('content')
<h2 class="section-title">+ AJOUTER UN CINÉASTE</h2>
<div class="form-container">
    <form method="POST" action="{{ route('cineaste.store') }}" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="preCineaste" value="{{ old('preCineaste') }}" required>
        </div>
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nomCineaste" value="{{ old('nomCineaste') }}" required>
        </div>
        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="datNaiCineaste" value="{{ old('datNaiCineaste') }}" required>
        </div>
        <div class="form-group">
            <label>Nationalité</label>
            <input type="text" name="natCineaste" value="{{ old('natCineaste') }}" required>
        </div>
        <div class="form-group">
            <label>Biographie</label>
            <textarea name="bioCineaste" rows="4">{{ old('bioCineaste') }}</textarea>
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="imgCineaste" accept="image/*">
        </div>

        {{-- Liaison film --}}
        <h3 style="color: #991917; margin: 30px 0 15px; font-family: 'Orbitron', sans-serif;">RELIER À UN FILM</h3>
        <div class="form-group">
            <label>Film</label>
            <select name="idFilm" style="width: 100%; padding: 10px; background: #2a2a3e; color: white; border: none; border-radius: 5px;">
                <option value="">-- Aucun film --</option>
                @foreach($films as $film)
                    <option value="{{ $film->idFilm }}" {{ old('idFilm') == $film->idFilm ? 'selected' : '' }}>
                        {{ $film->titFilm }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Rôle</label>
            <select name="typeRole" style="width: 100%; padding: 10px; background: #2a2a3e; color: white; border: none; border-radius: 5px;">
                <option value="">-- Choisir --</option>
                <option value="acteur" {{ old('typeRole') === 'acteur' ? 'selected' : '' }}>🎭 Acteur</option>
                <option value="realisateur" {{ old('typeRole') === 'realisateur' ? 'selected' : '' }}>🎬 Réalisateur</option>
            </select>
        </div>
        <div class="form-group" id="roleNameGroup" style="display: none;">
            <label>Nom du rôle (si acteur)</label>
            <input type="text" name="typRole" value="{{ old('typRole') }}" placeholder="ex: Inspecteur, Héros...">
        </div>

        <div style="display: flex; gap: 15px; margin-top: 30px;">
            <button type="submit" class="connexion-btn">💾 Sauvegarder</button>
            <a href="{{ route('cineaste.index') }}" class="connexion-btn" style="background-color: #444;">❌ Annuler</a>
        </div>
    </form>
</div>

<script>
    // Affiche le champ nom du rôle seulement si acteur
    document.querySelector('select[name="typeRole"]').addEventListener('change', function() {
        document.getElementById('roleNameGroup').style.display = this.value === 'acteur' ? 'block' : 'none';
    });
</script>
@endsection
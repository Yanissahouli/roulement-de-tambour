@extends('layouts.app')
@section('title', 'Ajouter un cinéma')
@section('content')
<h2 class="section-title">+ AJOUTER UN CINÉMA</h2>
<div class="form-container">
    <form method="POST" action="{{ route('cinema.store') }}">
        @csrf
        @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <label>Nom du cinéma</label>
            <input type="text" name="nomCin" value="{{ old('nomCin') }}" required>
        </div>
        <div class="form-group">
            <label>Adresse</label>
            <input type="text" name="adrCin" value="{{ old('adrCin') }}" required>
        </div>
        <div class="form-group">
            <label>Ville</label>
            <input type="text" name="vilCin" value="{{ old('vilCin') }}" required>
        </div>
        <div class="form-group">
            <label>Code postal</label>
            <input type="text" name="cpCin" value="{{ old('cpCin') }}" required>
        </div>
        <div style="display: flex; gap: 15px; margin-top: 30px;">
            <button type="submit" class="connexion-btn"> Sauvegarder</button>
            <a href="{{ route('cinema.index') }}" class="connexion-btn" style="background-color: #444;">❌ Annuler</a>
        </div>
    </form>
</div>
@endsection
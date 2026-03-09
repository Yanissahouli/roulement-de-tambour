@extends('layouts.app')
@section('title', 'Inscription - CineForAll')
@section('content')

    <div class="form-container">
        <h2 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 25px; text-align: center;">INSCRIPTION</h2>

        @if ($errors->any())
            <div style="background: #7a1210; color: white; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/inscription">
            @csrf
            <div class="form-group">
                <input type="text" name="nomUti" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <input type="text" name="preUti" placeholder="Prénom" required>
            </div>
            <div class="form-group">
                <input type="email" name="mailUtil" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="mdpUti" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="connexion-btn" style="width: 100%; margin-top: 10px;">S'INSCRIRE</button>

            <p style="text-align:center; margin-top: 20px; color: #aaa;">
                Déjà un compte ? <a href="/login" class="link-white">Se connecter</a>
            </p>
        </form>
    </div>

@endsection

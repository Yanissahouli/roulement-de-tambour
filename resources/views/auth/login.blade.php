@extends('layouts.app')
@section('title', 'Connexion - CineForAll')
@section('content')

    <div class="form-container">
        <h2 style="font-family: 'Orbitron', sans-serif; color: #e0e0e0; margin-bottom: 25px; text-align: center;">CONNEXION</h2>

        @if ($errors->any())
            <ul style="color: #ff4444; margin-bottom: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label style="color: #aaa;">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label style="color: #aaa;">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="connexion-btn" style="width: 100%; margin-top: 10px;">SE CONNECTER</button>

            <p style="text-align:center; margin-top: 20px; color: #aaa;">
                Pas encore de compte ? <a href="/inscription" class="link-white">S'inscrire</a>
            </p>
        </form>
    </div>

@endsection

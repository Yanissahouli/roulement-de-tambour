<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>

    <div class>
        <a>Bienvenue chez Roulement de Tambour</a>
    </div>
</header>

<section class="top-section">

   <div class="logo">
    <img src="{{ asset('img/logo_CineForAll.png') }}" alt="Logo CineForAll">
    <h2>CineForAll</h2>
</div>


    <nav class="nav-menu">
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('cinema.index') }}">Cinéma</a>    
        <a href="{{ route('cineaste.index') }}">Cinéaste</a>
        <a href="{{ route('film.index') }}">Film</a>
        <a href="{{ route('user.index') }}">Utilisateur</a>
    </nav>
 <!--vérifie si l'utilisateur est connecté-->  
    @guest
<a href="{{ route('login') }}" class="connexion-btn">Connexion ▶</a>
@else
<form method="POST" action="{{ route('logout') }}" style="display:inline;">
    @csrf <!--sécurité Laravel.--> 
    <button type="submit" class="connexion-btn">Déconnexion ▶</button>
</form>
@endguest

</section>

<main>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

</main>

<footer>
    <p>© 2025 CineForAll – Tous droits réservés.</p>
</footer>

</body>
</html>

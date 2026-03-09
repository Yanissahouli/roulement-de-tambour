<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="header-left">N°1 SUR LE CINEMA</div>

    <div class="search-bar">
        <input type="text" placeholder="Rechercher...">
    </div>

    <div class="header-right">
        <a href="{{ route('register') }}" class="link-white">CREER UN COMPTE</a>
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

    <a href="{{ route('login') }}" class="connexion-btn">Connexion ▶</a>

</section>

<main>
    @yield('content')
</main>

<footer>
    <p>© 2025 CineForAll – Tous droits réservés.</p>
</footer>

</body>
</html>

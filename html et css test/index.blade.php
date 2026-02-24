<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CineForAll</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- HEADER ROUGE -->
    <header>
        <div class="header-left">N°1 SUR LE CINEMA</div>

        <div class="search-bar">
            <form action="#" method="get">
                <input type="text" name="query" placeholder="Rechercher...">
                <button type="submit">🔍</button>
            </form>
        </div>

        <div class="header-right">
            <a href="#" style="color:white; text-decoration:none;">CREER UN COMPTE</a>
        </div>
    </header>

    <!-- SECTION LOGO + NAV -->
    <section class="top-section">
        <div class="logo">
            <img src="{{ asset('images/logo_CineForAll.png') }}" alt="logo">
            <h2>CineForAll</h2>
        </div>

        <nav class="nav-menu">
            <a href="{{ url('/') }}">Accueil</a>
            <a href="#">Cinéma</a>
            <a href="#">Cinéaste</a>
            <a href="#">User</a>
            <a href="#">Film</a>
        </nav>

        <a href="#" class="connexion-btn">Connexion ▶</a>
    </section>

    <!-- TITRE -->
    <h2 class="section-title">Dernières sorties</h2>

    <!-- FILMS -->
    <section class="movies">
        <div class="movie-card">
            <img src="{{ asset('images/will_hunting.webp') }}" alt="Will Hunting">
            <div class="rating">⭐ 8,4/10</div>
            <div class="duration">🕒 120 min</div>
        </div>

        <div class="movie-card">
            <img src="{{ asset('images/the_hunt.webp') }}" alt="The Hunt">
            <div class="rating">⭐ 8,4/10</div>
            <div class="duration">🕒 120 min</div>
        </div>

        <div class="movie-card">
            <img src="{{ asset('images/Terminator_2.webp') }}" alt="Terminator 2">
            <div class="rating">⭐ 8,4/10</div>
            <div class="duration">🕒 120 min</div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 CineForAll – Tous droits réservés.</p>
        <p>CineForAll est une plateforme fictive destinée à présenter des films, séries, actualités et critiques.</p>
        <p>Nous contacter</p>
    </footer>

</body>
</html>
<?php
// Tableau temporaire de films (simulation base de données)
$films = [
    ["titre" => "Will Hunting", "image" => "image/will_hunting.webp", "note" => "8,4/10", "duree" => "120 min"],
    ["titre" => "The Hunt", "image" => "image/the_hunt.webp", "note" => "8,4/10", "duree" => "120 min"],
    ["titre" => "Terminator 2", "image" => "image/Terminator_2.webp", "note" => "8,4/10", "duree" => "120 min"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CineForAll</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div>N°1 SUR LE CINEMA</div>

    <form action="#" method="get">
        <input type="text" placeholder="Rechercher...">
    </form>

    <a href="inscription.php" class="link-white">CREER UN COMPTE</a>
</header>

<section class="top-section">

    <div class="logo">
        <img src="image/logo_CineForAll.png" alt="Logo CineForAll">
        <h2>CineForAll</h2>
    </div>

    <!-- Navigation propre -->
    <nav class="nav-menu">
        <a href="index.php">Accueil</a>
        <a href="cinema.php">Cinéma</a>
        <a href="cineaste.php">Cinéaste</a>
        <a href="film.php">Film</a>
        <a href="user.php">Utilisateur</a>
    </nav>

    <a href="connexion.php" class="connexion-btn">Connexion ▶</a>

</section>

<h2 class="section-title">Dernières sorties</h2>

<section class="movies">

    <?php foreach($films as $film): ?>
        <article class="movie-card">
            <img src="<?= $film['image'] ?>" alt="<?= $film['titre'] ?>">
            <h3><?= $film['titre'] ?></h3>
            <div class="rating">⭐ <?= $film['note'] ?></div>
            <div class="duration">🕒 <?= $film['duree'] ?></div>
        </article>
    <?php endforeach; ?>

</section>

<footer>
    <p>© 2025 CineForAll – Tous droits réservés.</p>
</footer>

</body>
</html>
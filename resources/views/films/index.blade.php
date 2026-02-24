<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CineForAll - Films</title>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #991917;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-family: 'Lilita One', cursive;
            color: white;
            font-size: 2.5em;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        h2 {
            font-family: 'Lilita One', cursive;
            color: #991917;
            margin-bottom: 20px;
        }

        .films-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .film-card {
            background-color: white;
            border-top: 5px solid #991917;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .film-card h3 {
            font-family: 'Lilita One', cursive;
            color: #991917;
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .film-card p {
            color: #333;
            margin-bottom: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<header>
    <h1>CineForAll</h1>
</header>

<nav>
    <a href="/">Accueil</a>
    <a href="/films">Films</a>
    <a href="/acteurs">Acteurs</a>
</nav>

<div class="container">
    <h2>Liste des films</h2>

    <div class="films-grid">
        @foreach($films as $film)
            <div class="film-card">
                <h3>{{ $film->titFilm }}</h3>
                <p>{{ $film->desFilm }}</p>
                <p>Langue : {{ $film->lanFilm }}</p>
                <p>Durée : {{ $film->durFilm }}</p>
                <p>Sortie : {{ $film->annsorFilm }}</p>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CineForAll - Acteurs</title>
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

        nav {
            background-color: #7a1212;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-family: 'Lilita One', cursive;
            font-size: 1.1em;
        }

        nav a:hover {
            text-decoration: underline;
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

        .acteurs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .acteur-card {
            background-color: white;
            border-top: 5px solid #991917;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .acteur-card h3 {
            font-family: 'Lilita One', cursive;
            color: #991917;
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .acteur-card p {
            color: #333;
            margin-bottom: 5px;
            font-size: 0.9em;
        }

        footer {
            background-color: #991917;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-family: 'Lilita One', cursive;
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
    <h2>Nos acteurs</h2>

    <div class="acteurs-grid">
        @foreach($cineaste as $acteur)
            <div class="acteur-card">
                <h3>{{ $acteur->preCineaste }} {{ $acteur->nomCineaste }}</h3>
                <p>Né(e) le : {{ $acteur->datNaiCineaste }}</p>
                <p>Nationalité : {{ $acteur->natCineaste }}</p>
                <p>{{ $acteur->bioCineaste }}</p>
            </div>
        @endforeach
    </div>
</div>

<footer>
    <p>CineForAll © 2026</p>
</footer>

</body>
</html>

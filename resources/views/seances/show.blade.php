<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Séance</title>
</head>
<body>

<h1>Séance</h1>

<p><strong>Film :</strong> {{ $seance->film->titre ?? 'Non défini' }}</p>
<p><strong>Cinéma :</strong> {{ $seance->cinema->nom ?? 'Non défini' }}</p>
<p><strong>Date :</strong> {{ $seance->date }}</p>
<p><strong>Heure :</strong> {{ $seance->heure }}</p>

@auth
    <a href="/reservation/{{ $seance->id }}">🎟 Réserver cette séance</a>
@else
    <p>
        <a href="{{ route('login') }}">Connecte-toi</a> pour réserver
    </p>
@endauth

</body>
</html>
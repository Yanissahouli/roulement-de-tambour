<?php
class CinemaController extends Controller
{
    public function show(Cinema $cinema)
    {
        $seances = $cinema->seances;

        return view('cinemas.show', compact('cinema', 'seances'));
    }
    public function index(Request $request)
{
    $filmId = $request->query('film_id'); // récupère l'ID du film depuis l'URL

    // On récupère uniquement les cinémas qui ont des séances pour ce film
    $cinemas = Cinema::whereHas('seances', function($query) use ($filmId) {
        $query->where('film_id', $filmId);
    })->get();

    return view('cinemas.index', compact('cinemas'));
}
}
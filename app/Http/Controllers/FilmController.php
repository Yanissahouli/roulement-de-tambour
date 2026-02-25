<?php

namespace App\Http\Controllers;

use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.film', [
            'films' => Film::all()
        ]);
    }

    public function show(Film $film)
    {
        $film->load('seances.salle.cinema');
        return view('film.show', compact('film'));
    }
}

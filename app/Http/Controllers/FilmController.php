<?php

namespace App\Http\Controllers;

use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.index', [
            'films' => Film::all()
        ]);
    }

    public function show(Film $film)
    {
        return view('film.show', compact('film'));
    }
}

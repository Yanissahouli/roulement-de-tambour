<?php
class FilmController extends Controller
{
    public function index()
    {
        return view('films.index', [
            'films' => Film::all()
        ]);
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function show(Cinema $cinema)
    {
        $seances = $cinema->seances;

        return view('cinema.show', compact('cinema', 'seances'));
    }

    public function index(Request $request)
    {
        $filmId = $request->query('film_id');

        $cinemas = Cinema::whereHas('seances', function($query) use ($filmId) {
            $query->where('film_id', $filmId);
        })->get();

        return view('cinema.index', compact('cinemas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;

class AccueilController extends Controller
{
    public function index()
    {
        $films = Film::all();
        $cinemas = Cinema::all();

        return view('accueil.index', compact('films', 'cinemas'));
    }
}

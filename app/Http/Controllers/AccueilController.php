<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;

class AccueilController extends Controller
{
    public function index()
    {
        // On récupère les données depuis la BDD
        $films = Film::all();
        $cinemas = Cinema::all();

        // On les envoie à la vue
        return view('accueil', compact('films', 'cinemas'));
    }
}
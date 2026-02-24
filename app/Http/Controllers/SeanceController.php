<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function show(Seance $seance)
    {
        // Affiche les détails d'une séance
        return view('seances.show', compact('seance'));
    }
}
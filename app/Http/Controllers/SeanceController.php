<?php
namespace App\Http\Controllers;
use App\Models\Seance;
use App\Models\Salle;
use App\Models\Film;
use Illuminate\Http\Request;
class SeanceController extends Controller
{
    public function show(Seance $seance)
    {
        return view('seances.show', compact('seance'));
    }

    public function create()
    {
        $salles = Salle::with('cinema')->get();
        $films = Film::all();
        return view('seances.create', compact('salles', 'films'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomSeance' => 'required',
            'tarifSeance' => 'required|numeric',
            'dateSeance' => 'required|date',
            'idSal' => 'required',
            'idFilm' => 'required',
        ]);

        $seance = Seance::create([
            'nomSeance' => $request->nomSeance,
            'tarifSeance' => $request->tarifSeance,
            'dateSeance' => $request->dateSeance,
            'idSal' => $request->idSal,
        ]);

        // Associer le film à la séance via la table correspond
        \DB::table('correspond')->insert([
            'idSeance' => $seance->idSeance,
            'idFilm' => $request->idFilm,
        ]);

        return redirect()->route('film.show', $request->idFilm)->with('success', 'Séance ajoutée !');
    }
}
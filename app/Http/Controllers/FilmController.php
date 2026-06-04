<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
class FilmController extends Controller
{
    public function index(Request $request)
    {
        $query = Film::query();

        if ($request->filled('search')) {
            $query->where('titFilm', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('genre')) {
            $query->whereHas('genres', fn($q) => $q->where('genre.idGen', $request->genre));
        }

        $films = $query->get();
        $genres = Genre::orderBy('libGen')->get();

        return view('film.film', compact('films', 'genres'));
    }

    public function show(Film $film)
    {
        // Charge les séances, acteurs et réalisateurs
        $film->load('seances.salle.cinema', 'acteurs', 'realisateurs');
        return view('film.show', compact('film'));
    }

    public function create()
    {
        $salles = \App\Models\Salle::with('cinema')->get();
        return view('film.create', compact('salles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titFilm' => 'required',
            'desFilm' => 'required',
            'annsorFilm' => 'required',
            'lanFilm' => 'required',
            'durFilm' => 'required',
            'imgFilm' => 'required|image',
            'nomSeance' => 'required',
            'tarifSeance' => 'required|numeric',
            'dateSeance' => 'required|date',
            'idSal' => 'required',
        ]);
        $img = $request->file('imgFilm');
        $imgNom = $img->getClientOriginalName();
        $img->move(public_path('img'), $imgNom);
        $film = Film::create([
            'titFilm' => $request->titFilm,
            'desFilm' => $request->desFilm,
            'annsorFilm' => $request->annsorFilm,
            'lanFilm' => $request->lanFilm,
            'durFilm' => $request->durFilm,
            'imgFilm' => $imgNom,
        ]);
        $seance = \App\Models\Seance::create([
            'nomSeance' => $request->nomSeance,
            'tarifSeance' => $request->tarifSeance,
            'dateSeance' => $request->dateSeance,
            'idSal' => $request->idSal,
        ]);
        \DB::table('correspond')->insert([
            'idSeance' => $seance->idSeance,
            'idFilm' => $film->idFilm,
        ]);
        return redirect()->route('film.show', $film->idFilm)->with('success', 'Film et séance ajoutés !');
    }

    // Affiche le formulaire de modification
    public function edit(Film $film)
    {
        return view('film.edit', compact('film'));
    }

    // Sauvegarde les modifications
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'titFilm' => 'required',
            'desFilm' => 'required',
            'annsorFilm' => 'required',
            'lanFilm' => 'required',
            'durFilm' => 'required',
        ]);
        $film->titFilm = $request->titFilm;
        $film->desFilm = $request->desFilm;
        $film->annsorFilm = $request->annsorFilm;
        $film->lanFilm = $request->lanFilm;
        $film->durFilm = $request->durFilm;
        $film->save();
        return redirect('/films/' . $film->idFilm)->with('success', 'Film modifié avec succès !');
    }

    // Supprime le film et ses liaisons
    public function destroy(Film $film)
    {

        \DB::table('correspond')->where('idFilm', $film->idFilm)->delete();
        \DB::table('diffuser')->where('idFilm', $film->idFilm)->delete();
        \DB::table('jouer')->where('idFilm', $film->idFilm)->delete();
        \DB::table('composer')->where('idFilm', $film->idFilm)->delete();
        $film->delete();
        return redirect()->route('film.index')->with('success', 'Film supprimé avec succès !');
    }
}

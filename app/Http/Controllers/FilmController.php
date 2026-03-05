<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
}
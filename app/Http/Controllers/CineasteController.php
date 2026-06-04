<?php
namespace App\Http\Controllers;
use App\Models\Cineaste;
use Illuminate\Http\Request;
class CineasteController extends Controller
{
    public function index()
    {
        $cineastes = Cineaste::all();
        return view('cineaste.index', compact('cineastes'));
    }

    public function show($id)
    {
        $cineaste = Cineaste::findOrFail($id);
        return view('cineaste.show', compact('cineaste'));
    }

    // Affiche le formulaire d'ajout et placer les acteurs
   public function create()
{
    $films = \App\Models\Film::all();
    return view('cineaste.create', compact('films'));
}

    // Sauvegarde le nouveau cinéaste
    public function store(Request $request)
{
    $request->validate([
        'preCineaste'    => 'required',
        'nomCineaste'    => 'required',
        'datNaiCineaste' => 'required|date',
        'natCineaste'    => 'required',
        'bioCineaste'    => 'nullable',
        'imgCineaste'    => 'nullable|image',
    ]);

    $imgNom = null;
    if ($request->hasFile('imgCineaste')) {
        $img = $request->file('imgCineaste');
        $imgNom = $img->getClientOriginalName();
        $img->move(public_path('imgCineaste'), $imgNom);
    }

    $cineaste = Cineaste::create([
        'preCineaste'    => $request->preCineaste,
        'nomCineaste'    => $request->nomCineaste,
        'datNaiCineaste' => $request->datNaiCineaste,
        'natCineaste'    => $request->natCineaste,
        'bioCineaste'    => $request->bioCineaste,
        'imgCineaste'    => $imgNom,
    ]);

    // Liaison avec les films
    if ($request->filled('idFilm') && $request->filled('typeRole')) {
        if ($request->typeRole === 'acteur') {
            \DB::table('jouer')->insert([
                'idFilm'      => $request->idFilm,
                'idCineaste'  => $cineaste->idCineaste,
                'typRole'     => $request->typRole ?? 'Acteur',
            ]);
        } elseif ($request->typeRole === 'realisateur') {
            \DB::table('composer')->insert([
                'idFilm'     => $request->idFilm,
                'idCineaste' => $cineaste->idCineaste,
            ]);
        }
    }

    return redirect()->route('cineaste.index')->with('success', 'Cinéaste ajouté avec succès !');
}

    // Affiche le formulaire de modification
    public function edit($id)
    {
        $cineaste = Cineaste::findOrFail($id);
        return view('cineaste.edit', compact('cineaste'));
    }

    // Sauvegarde les modifications
    public function update(Request $request, $id)
    {
        $cineaste = Cineaste::findOrFail($id);
        $request->validate([
            'preCineaste'    => 'required',
            'nomCineaste'    => 'required',
            'datNaiCineaste' => 'required|date',
            'natCineaste'    => 'required',
            'bioCineaste'    => 'nullable',
            'imgCineaste'    => 'nullable|image',
        ]);

        if ($request->hasFile('imgCineaste')) {
            $img = $request->file('imgCineaste');
            $imgNom = $img->getClientOriginalName();
            $img->move(public_path('imgCineaste'), $imgNom);
            $cineaste->imgCineaste = $imgNom;
        }

        $cineaste->preCineaste    = $request->preCineaste;
        $cineaste->nomCineaste    = $request->nomCineaste;
        $cineaste->datNaiCineaste = $request->datNaiCineaste;
        $cineaste->natCineaste    = $request->natCineaste;
        $cineaste->bioCineaste    = $request->bioCineaste;
        $cineaste->save();

        return redirect('/cineastes/' . $cineaste->idCineaste)->with('success', 'Cinéaste modifié avec succès !');
    }

    // Supprime le cinéaste
    public function destroy($id)
    {
        $cineaste = Cineaste::findOrFail($id);
        // Supprime les liaisons
        \DB::table('jouer')->where('idCineaste', $cineaste->idCineaste)->delete();
        \DB::table('composer')->where('idCineaste', $cineaste->idCineaste)->delete();
        $cineaste->delete();

        return redirect()->route('cineaste.index')->with('success', 'Cinéaste supprimé avec succès !');
    }
}
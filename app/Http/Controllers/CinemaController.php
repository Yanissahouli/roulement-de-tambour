<?php
namespace App\Http\Controllers;
use App\Models\Cinema;
use Illuminate\Http\Request;
class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cinema.index', compact('cinemas'));
    }

    public function show(Cinema $cinema)
    {
        $cinema->load('films');
        return view('cinema.show', compact('cinema'));
    }

    // Affiche le formulaire d'ajout
    public function create()
    {
        return view('cinema.create');
    }

    // Sauvegarde le nouveau cinéma
    public function store(Request $request)
    {
        $request->validate([
            'nomCin' => 'required',
            'adrCin' => 'required',
            'vilCin' => 'required',
            'cpCin'  => 'required',
        ]);

        Cinema::create([
            'nomCin' => $request->nomCin,
            'adrCin' => $request->adrCin,
            'vilCin' => $request->vilCin,
            'cpCin'  => $request->cpCin,
        ]);

        return redirect()->route('cinema.index')->with('success', 'Cinéma ajouté avec succès !');
    }

    // Affiche le formulaire de modification
    public function edit(Cinema $cinema)
    {
        return view('cinema.edit', compact('cinema'));
    }

    // Sauvegarde les modifications
    public function update(Request $request, Cinema $cinema)
    {
        $request->validate([
            'nomCin' => 'required',
            'adrCin' => 'required',
            'vilCin' => 'required',
            'cpCin'  => 'required',
        ]);

        $cinema->nomCin = $request->nomCin;
        $cinema->adrCin = $request->adrCin;
        $cinema->vilCin = $request->vilCin;
        $cinema->cpCin  = $request->cpCin;
        $cinema->save();

        return redirect('/cinemas/' . $cinema->idCin)->with('success', 'Cinéma modifié avec succès !');
    }

    // Supprime le cinéma et ses liaisons
    public function destroy(Cinema $cinema)
    {
        // Supprime les liaisons dans diffuser
        \DB::table('diffuser')->where('idCin', $cinema->idCin)->delete();
        $cinema->delete();

        return redirect()->route('cinema.index')->with('success', 'Cinéma supprimé avec succès !');
    }
}
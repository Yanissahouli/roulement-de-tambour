<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Seance $seance)
    {
      return view('reservation.create', compact('seance'));
    }

    public function store(Request $request)
{
    $existe = Reservation::where('idUti', auth()->id())
                         ->where('idSeance', $request->seance_id)
                         ->exists();

    if ($existe) {
        return redirect()->back()->with('error', 'Vous avez déjà réservé cette séance.');
    }

    Reservation::create([
        'idUti' => auth()->id(),
        'idSeance' => $request->seance_id,
        'nbPers' => $request->nbPers
    ]);

    return redirect('/')->with('success', 'Réservation confirmée !');
}
}

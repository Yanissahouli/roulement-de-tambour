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
    public function seance()
    {
     return $this->belongsTo(Seance::class, 'idSeance', 'idSeance');
    }

    public function store(Request $request)
{
    $existe = Reservation::where('idUti', auth()->user()->id)
                         ->where('idSeance', $request->seance_id)
                         ->exists();

    if ($existe) {
        return redirect()->back()->with('error', 'Vous avez déjà réservé cette séance.');
    }

    Reservation::create([
        'idUti' => auth()->user()->id,
        'idSeance' => $request->seance_id,
        'nbPers' => $request->nbPers
    ]);

    return redirect('/')->with('success', 'Réservation confirmée !');
}
}

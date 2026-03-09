<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Seance $seance)
    {
        $placesReservees = \App\Models\Reserver::where('idSeance', $seance->idSeance)->sum('nbPers');
        $placesDisponibles = $seance->salle->capSal - $placesReservees;
        return view('reservation.create', compact('seance', 'placesDisponibles'));
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class, 'idSeance', 'idSeance');
    }

    public function store(Request $request)
    {
        $seance = Seance::find($request->seance_id);
        $salle = $seance->salle;

        // Calculer les places déjà réservées
        $placesReservees = \App\Models\Reserver::where('idSeance', $request->seance_id)->sum('nbPers');
        $placesDisponibles = $salle->capSal - $placesReservees;

        // Vérifier s'il reste assez de places
        if ($request->nbPers > $placesDisponibles) {
            return redirect()->back()->with('error', 'Il ne reste que ' . $placesDisponibles . ' place(s) disponible(s) pour cette séance.');
        }

        // Vérifier max 10 places par utilisateur
        if ($request->nbPers > 10) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas réserver plus de 10 places.');
        }

        $existe = \App\Models\Reserver::where('idUti', auth()->user()->id)
            ->where('idSeance', $request->seance_id)
            ->exists();

        if ($existe) {
            return redirect()->back()->with('error', 'Vous avez déjà réservé cette séance.');
        }

        \App\Models\Reserver::create([
            'idUti' => auth()->user()->id,
            'idSeance' => $request->seance_id,
            'nbPers' => $request->nbPers
        ]);

        return redirect('/')->with('success', 'Réservation confirmée !');
    }
}

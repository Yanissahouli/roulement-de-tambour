<?php
class ReservationController extends Controller
{
    public function create(Seance $seance)
    {
        return view('reservations.create', compact('seance'));
    }

    public function store(Request $request)
    {
        Reservation::create([
            'user_id' => auth()->id(),
            'seance_id' => $request->seance_id
        ]);

        return redirect('/')->with('success', 'Réservation confirmée');
    }
}
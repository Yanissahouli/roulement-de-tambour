<?php
class CinemaController extends Controller
{
    public function show(Cinema $cinema)
    {
        $seances = $cinema->seances;

        return view('cinemas.show', compact('cinema', 'seances'));
    }
}
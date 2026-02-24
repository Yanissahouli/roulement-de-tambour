<?php

namespace App\DAO;

use App\Models\Jouer;

class Jouer_DAO
{
    public function getAll()
    {
        return Jouer::all();
    }

    public function getByFilm($idFilm)
    {
        return Jouer::where('idFilm', $idFilm)->get();
    }

    public function create($data)
    {
        return Jouer::create($data);
    }

    public function delete($idFilm, $idCineaste)
    {
        return Jouer::where('idFilm', $idFilm)
            ->where('idCineaste', $idCineaste)
            ->delete();
    }
}

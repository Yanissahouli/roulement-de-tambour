<?php

namespace App\DAO;

use App\Models\Avoir;

class Avoir_DAO
{
    public function getAll()
    {
        return Avoir::all();
    }

    public function getByFilm($idFilm)
    {
        return Avoir::where('idFilm', $idFilm)->get();
    }

    public function create($data)
    {
        return Avoir::create($data);
    }

    public function delete($idFilm, $idGen)
    {
        return Avoir::where('idFilm', $idFilm)
            ->where('idGen', $idGen)
            ->delete();
    }
}

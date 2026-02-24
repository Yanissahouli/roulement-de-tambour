<?php

namespace App\DAO;

use App\Models\Composer;

class Composer_DAO
{
    public function getAll()
    {
        return Composer::all();
    }

    public function getByFilm($idFilm)
    {
        return Composer::where('idFilm', $idFilm)->get();
    }

    public function create($data)
    {
        return Composer::create($data);
    }

    public function delete($idFilm, $idCineaste)
    {
        return Composer::where('idFilm', $idFilm)
            ->where('idCineaste', $idCineaste)
            ->delete();
    }
}

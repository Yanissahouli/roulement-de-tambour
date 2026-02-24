<?php

namespace App\DAO;

use App\Models\Diffuser;

class Diffuser_DAO
{
    public function getAll()
    {
        return Diffuser::all();
    }

    public function getByCinema($idCin)
    {
        return Diffuser::where('idCin', $idCin)->get();
    }

    public function create($data)
    {
        return Diffuser::create($data);
    }

    public function delete($idCin, $idFilm)
    {
        return Diffuser::where('idCin', $idCin)
            ->where('idFilm', $idFilm)
            ->delete();
    }
}

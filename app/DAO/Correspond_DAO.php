<?php

namespace App\DAO;

use App\Models\Correspond;

class Correspond_DAO
{
    public function getAll()
    {
        return Correspond::all();
    }

    public function getBySeance($idSeance)
    {
        return Correspond::where('idSeance', $idSeance)->get();
    }

    public function create($data)
    {
        return Correspond::create($data);
    }

    public function delete($idSeance, $idFilm)
    {
        return Correspond::where('idSeance', $idSeance)
            ->where('idFilm', $idFilm)
            ->delete();
    }
}

<?php

namespace App\DAO;

use App\Models\Film;

class Film_DAO
{
    public function getAll()
    {
        return Film::all();
    }

    public function getById($id)
    {
        return Film::find($id);
    }

    public function create($data)
    {
        return Film::create($data);
    }

    public function update($id, $data)
    {
        $film = Film::find($id);
        $film->update($data);
        return $film;
    }

    public function delete($id)
    {
        Film::find($id)->delete();
    }
}

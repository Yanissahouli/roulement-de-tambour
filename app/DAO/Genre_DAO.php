<?php

namespace App\DAO;

use App\Models\Genre;

class Genre_DAO
{
    public function getAll()
    {
        return Genre::all();
    }

    public function getById($id)
    {
        return Genre::find($id);
    }

    public function create($data)
    {
        return Genre::create($data);
    }

    public function update($id, $data)
    {
        $genre = Genre::find($id);
        $genre->update($data);
        return $genre;
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
    }
}

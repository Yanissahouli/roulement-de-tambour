<?php

namespace App\DAO;

use App\Models\Cineaste;

class Cineaste_DAO
{
    public function getAll()
    {
        return Cineaste::all();
    }

    public function getById($id)
    {
        return Cineaste::find($id);
    }

    public function create($data)
    {
        return Cineaste::create($data);
    }

    public function update($id, $data)
    {
        $cineaste = Cineaste::find($id);
        $cineaste->update($data);
        return $cineaste;
    }

    public function delete($id)
    {
        Cineaste::find($id)->delete();
    }
}

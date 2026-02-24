<?php

namespace App\DAO;

use App\Models\Salle;

class Salle_DAO
{
    public function getAll()
    {
        return Salle::all();
    }

    public function getById($id)
    {
        return Salle::find($id);
    }

    public function create($data)
    {
        return Salle::create($data);
    }

    public function update($id, $data)
    {
        $salle = Salle::find($id);
        $salle->update($data);
        return $salle;
    }

    public function delete($id)
    {
        Salle::find($id)->delete();
    }
}

<?php

namespace App\DAO;

use App\Models\Seance;

class Seance_DAO
{
    public function getAll()
    {
        return Seance::all();
    }

    public function getById($id)
    {
        return Seance::find($id);
    }

    public function create($data)
    {
        return Seance::create($data);
    }

    public function update($id, $data)
    {
        $seance = Seance::find($id);
        $seance->update($data);
        return $seance;
    }

    public function delete($id)
    {
        Seance::find($id)->delete();
    }
}

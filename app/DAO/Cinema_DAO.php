<?php

namespace App\DAO;

use App\Models\Cinema;

class Cinema_DAO
{
    public function getAll()
    {
        return Cinema::all();
    }

    public function getById($id)
    {
        return Cinema::find($id);
    }

    public function create($data)
    {
        return Cinema::create($data);
    }

    public function update($id, $data)
    {
        $cinema = Cinema::find($id);
        $cinema->update($data);
        return $cinema;
    }

    public function delete($id)
    {
        Cinema::find($id)->delete();
    }
}

<?php

namespace App\DAO;

use App\Models\Utilisateur;

class Utilisateur_DAO
{
    public function getAll()
    {
        return Utilisateur::all();
    }

    public function getById($id)
    {
        return Utilisateur::find($id);
    }

    public function create($data)
    {
        return Utilisateur::create($data);
    }

    public function update($id, $data)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->update($data);
        return $utilisateur;
    }

    public function delete($id)
    {
        Utilisateur::find($id)->delete();
    }
}

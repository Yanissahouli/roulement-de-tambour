<?php

namespace App\DAO;

use Illuminate\Support\Facades\DB;

class Reserver_DAO
{
    public function getAll()
    {
        return DB::table('reserver')->get();
    }

    public function getByUser($idUti)
    {
        return DB::table('reserver')->where('idUti', $idUti)->get();
    }

    public function create($data)
    {
        return DB::table('reserver')->insert($data);
    }

    public function update($idUti, $idSeance, $data)
    {
        return DB::table('reserver')
            ->where('idUti', $idUti)
            ->where('idSeance', $idSeance)
            ->update($data);
    }

    public function delete($idUti, $idSeance)
    {
        return DB::table('reserver')
            ->where('idUti', $idUti)
            ->where('idSeance', $idSeance)
            ->delete();
    }
}

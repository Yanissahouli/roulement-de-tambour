<?php

namespace App\Http\Controllers;

use App\DAO\Cineaste_DAO;

class CineasteController extends Controller
{
    public function index()
    {
        $cineasteDAO = new Cineaste_DAO();
        $cineaste = $cineasteDAO->getAll();
        return view('cineaste.index', compact('cineaste'));
    }
}

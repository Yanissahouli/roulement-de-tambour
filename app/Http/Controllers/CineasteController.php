<?php
namespace App\Http\Controllers;
use App\Models\Cineaste;

class CineasteController extends Controller
{
    public function index()
    {
        $cineastes = Cineaste::all();
        return view('cineaste.index', compact('cineastes'));
    }

    public function show($id)
    {
        $cineaste = Cineaste::findOrFail($id);
        return view('cineaste.show', compact('cineaste'));
    }
}

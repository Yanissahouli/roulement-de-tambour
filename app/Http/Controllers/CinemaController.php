<?php
namespace App\Http\Controllers;
use App\Models\Cinema;
class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cinema.index', compact('cinemas'));
    }

    public function show(Cinema $cinema)
    {
        return view('cinema.show', compact('cinema'));
    }
}
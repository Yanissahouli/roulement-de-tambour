<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\DAO\Utilisateur_DAO;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $user = auth()->user();
    $reservations = \App\Models\Reservation::where('idUti', auth()->id())
                    ->with('seance')
                    ->get();
    return view('user.index', compact('user', 'reservations'));
}

    public function showInscription()
    {
        return view('auth.inscription');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomUti' => 'required',
            'preUti' => 'required',
            'mailUtil' => 'required|email|unique:utilisateur,mailUtil',
            'mdpUti' => 'required',
        ], [
            'mailUtil.unique' => 'Un compte existe déjà avec cet email.',
        ]);

        $dao = new Utilisateur_DAO();
        $dao->create([
            'nomUti' => $request->nomUti,
            'preUti' => $request->preUti,
            'mailUtil' => $request->mailUtil,
            'mdpUti' => bcrypt($request->mdpUti),
            'rolUti' => 'user',
        ]);

        User::create([
            'name' => $request->nomUti . ' ' . $request->preUti,
            'email' => $request->mailUtil,
            'password' => bcrypt($request->mdpUti),
        ]);

        return redirect('/')->with('success', 'Inscription réussie !');
    }
}

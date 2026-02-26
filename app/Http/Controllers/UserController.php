<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\DAO\Utilisateur_DAO;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function showInscription()
    {
        return view('auth.inscription');
    }

    public function store(Request $request)
    {
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

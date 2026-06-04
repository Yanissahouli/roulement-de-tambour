<?php
namespace App\Http\Controllers;
use App\Models\Cineaste;
use Illuminate\Http\Request;

class CineasteController extends Controller
{
    public function index(Request $request)
    {
        $query = Cineaste::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nomCineaste', 'like', '%' . $search . '%')
                  ->orWhere('preCineaste', 'like', '%' . $search . '%');
            });
        }

        $cineastes = $query->get();
        return view('cineaste.index', compact('cineastes'));
    }

    public function show($id)
    {
        $cineaste = Cineaste::findOrFail($id);
        return view('cineaste.show', compact('cineaste'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::paginate(10);
        
        return view('formation.index', compact('formations'));
    }

    public function show($id)
    {
        $formation = Formation::findOrFail($id);
        $nbPoints = $formation->classe->sum('NombreMax');
        return view('formation.show', compact('formation', 'nbPoints'));
    }
    public function search(Request $request)
{
    $formation = Formation::where('Titre', $request->Titre)->first();


    if (!$formation) {
        return back()->with('error', 'Formation introuvable.');
    }

    $nombreHeures = optional($formation->modules)->sum('nombreHeures');

    $nombreClasses = optional($formation->classes)->count();
    
    $nombreEtudiants = optional($formation->etudiants)->count();
    

    return view('formation.details', compact('formation', 'nombreHeures', 'nombreClasses', 'nombreEtudiants'));
}

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::paginate(10);
        return view('etudiant.index', compact('etudiants'));
    
    }

    public function show($codeE)
{
    $etudiant = DB::table('etudiants')
                    ->where('codeE', $codeE)
                    ->first();
    
    $classe = DB::table('classes')
                    ->where('idc', $etudiant->idclasse)
                    ->first();
    
    $formation = DB::table('formations')
                    ->where('idf', $classe->idformation)
                    ->first();
                    
    return view('etudiant.show', compact('etudiant', 'classe', 'formation'));
}


public function edit($codeE)
{
    $etudiant = Etudiant::where('codeE', $codeE)->firstOrFail();
    $classes = Classe::select('idc', 'libelle')->distinct()->get();

    // Supprimer les doublons en utilisant groupBy et first
    $classes = $classes->groupBy('idc')->map->first();

    return view('etudiant.edit', compact('etudiant', 'classes'));
}




    public function update(Request $request, $codeE)
{
    $etudiant = DB::table('etudiants')->where('codeE', $codeE)->first();

    if (!$etudiant) {
        abort(404);
    }

    $updateData = [
        'nom' => $etudiant->nom,
        'prenom' => $etudiant->prenom,
        'adresse' => $etudiant->adresse,
        'dateNaissance' => $etudiant->dateNaissance,
        'idclasse' => $request->input('idclasse')
    ];

    DB::table('etudiants')->where('codeE', $codeE)->update($updateData);

    return redirect()->route('etudiant.show', ['codeE' => $codeE]);
}

public function isClassePleine($codeE)
{
    $classe = Classe::whereHas('etudiants', function ($query) use ($codeE) {
                    $query->where('codeE', $codeE);
                })
                ->with('etudiants')
                ->firstOrFail();

    $classePleine = $classe->etudiants->count() >= $classe->NombreMax;

    return view('etudiant.pleine', compact('classePleine', 'classe'));
}


}

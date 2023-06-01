@extends('layouts.app')

@section('content')
    <h1>Liste des étudiants</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th rowspan="2" class="text-center">Code</th>
                <th rowspan="2" class="text-center">Nom</th>
                <th rowspan="2" class="text-center">Prénom</th>
                <th rowspan="2" class="text-center">Adresse</th>
                <th rowspan="2" class="text-center">Date de naissance</th>
                
                <th colspan="2" class="text-center">Actions</th>
            </tr>
            <tr>
                <th class="text-center">Détails</th>
                <th class="text-center">Modifier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->codeE }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td>{{ $etudiant->dateNaissance }}</td>
                    
                    <td>
                        <a href="{{ route('etudiant.show', ['codeE' => $etudiant->codeE]) }}" class="btn btn-primary">Détails</a>
                    </td>
                    <td>
                        <a href="{{ route('etudiant.edit', ['codeE' => $etudiant->codeE]) }}" class="btn btn-success">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <div class='d-flex justify-content-center'>{{ $etudiants->links() }}</div> 
    </table>
@endsection

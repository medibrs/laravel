@extends('layouts.app')

@section('content')
    <h1>Liste des étudiants</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Date de naissance</th>
                <th>Classe</th>
                <th>Actions</th>
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
                    <td>{{ $etudiant->classe->libelle }}</td>
                    <td>
                        <a href="{{ route('etudiant.show', ['codeE' => $etudiant->codeE]) }}" class="btn btn-primary">Détails</a>
                        <a href="{{ route('etudiant.edit', ['codeE' => $etudiant->codeE]) }}" class="btn btn-warning">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

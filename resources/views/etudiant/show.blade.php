@extends('layouts.app')

@section('content')
    <h1>Détails de l'étudiant {{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
    <p>Code : {{ $etudiant->codeE }}</p>
    <p>Nom : {{ $etudiant->nom }}</p>
    <p>Prénom : {{ $etudiant->prenom }}</p>
    <p>Adresse : {{ $etudiant->adresse }}</p>
    <p>Date de naissance : {{ $etudiant->dateNaissance }}</p>
    <p>Classe : {{ $classe->libelle }}</p>
    <p>Formation : {{ $formation->Titre }}</p>
    <p>Nombre d'heures : {{ $formation->NbreHeure }}</p>
    <a href="{{ route('etudiant.edit', ['codeE' => $etudiant->codeE]) }}" class="btn btn-warning">Modifier</a>
    <a href="{{ route('etudiant.pleine', ['codeE' => $etudiant->codeE]) }}" class="btn btn-primary">Vérifier si la classe est pleine</a>
@endsection

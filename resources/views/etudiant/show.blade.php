@extends('layouts.app')
@section('content')
    <h1>Détails de l'étudiant {{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
   
    <h2>Classe :</h2>
    <ul>
        <li>idclasse : {{ $classe->idc }}</li>
        <li>libelle : {{ $classe->libelle }}</li>
        <li>Nombre Max : {{ $classe->NombreMax }}</li>
    </ul>
    <h2>Formation :</h2>
    <ul>
        <li>idFormation : {{ $formation->idf }}</li>
        <li>Titre : {{ $formation->Titre }}</li>
        <li>Nombre d'heures : {{ $formation->NbreHeure }}</li>
    </ul>
    <a href="{{ route('etudiant.edit', ['codeE' => $etudiant->codeE]) }}" class="btn btn-success">Modifier</a>
    <a href="{{ route('etudiant.pleine', ['codeE' => $etudiant->codeE]) }}" class="btn btn-danger">Vérifier si la classe est pleine</a>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Classe {{ $classe->libelle }}</div>

                    <div class="card-body">
                        <h5 class="card-title">Liste des étudiants inscrits dans la classe :</h5>
                        <p class="card-text">
                            <ul>
                                @foreach ($classe->etudiants as $etudiant)
                                    <li>{{ $etudiant->nom }} {{ $etudiant->prenom }}</li>
                                @endforeach
                            </ul>
                        </p>
                        @if ($classe->etudiants->count() >= $classe->NombreMax)
                            <div class="alert alert-danger" role="alert">
                                La classe est pleine.
                            </div>
                        @else
                            <div class="alert alert-success" role="alert">
                                Il reste {{ $classe->NombreMax - $classe->etudiants->count() }} places disponibles dans la classe.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

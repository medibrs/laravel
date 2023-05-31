@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Modifier la classe de l'étudiant {{ $etudiant->nom }} {{ $etudiant->prenom }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('etudiant.update', ['codeE' => $etudiant->codeE]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="idclasse" class="col-md-4 col-form-label text-md-right">Classe</label>

                                <div class="col-md-6">
                                    <select id="idclasse" class="form-control @error('idclasse') is-invalid @enderror" name="idclasse" required>
                                        <option value="">Sélectionner une classe</option>
                                        @foreach ($classes as $classe)
                                            <option value="{{ $classe->idc }}" @if ($classe->idc == $etudiant->classe->idc) selected @endif>{{ $classe->libelle }}</option>
                                        @endforeach
                                    </select>

                                    @error('idclasse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
                                    </button>
                                    <a href="{{ route('etudiant.index') }}" class="btn btn-secondary">
                                        Annuler
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

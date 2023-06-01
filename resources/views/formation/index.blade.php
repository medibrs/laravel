@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='d-flex justify-content-center'>{{ $formations->links() }}</div> 
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Rechercher les informations d'une formation</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('formation.search') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="libelle" class="col-md-4 col-form-label text-md-right">Titre de la formation</label>

                                <div class="col-md-6">
                                    <input id="libelle" type="text" class="form-control @error('libelle') is-invalid @enderror" name="Titre" value="{{ old('libelle') }}" required autofocus>

                                    @error('libelle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Rechercher
                                    </button>
                                </div>
                            </div>
                        </form>

                        @isset($formations)
                        @foreach($formations as $formation)
                            <hr>

                            <h4>Informations de la formation "{{ $formation->Titre }}"</h4>

                            <ul>
                                <li>Nombre d'heures : {{ $formation->NbreHeure }}</li>
                                <li>Nombre de classes : {{ $formation->classes->count() }}</li>
                                @php
                        $nombreEtudiantsInscrits = 0;
                    @endphp
                    
                    @foreach($formation->classes as $classe)
                        @php
                            $nombreEtudiantsInscrits += $classe->etudiants->count();
                        @endphp
                    @endforeach
                    
                    <li>Nombre d'étudiants inscrits : {{ $nombreEtudiantsInscrits }}</li>

                            </ul>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

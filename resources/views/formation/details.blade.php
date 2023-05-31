@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $formation->titre }}</div>

                    <div class="card-body">
                        


                        
                        <p><strong>Nombre d'heures:</strong> {{ $formation->NbreHeure }}</p>
                        <p><strong>Nombre de classes:</strong> {{ $formation->classes->count() }}</p>
                       

                        @php
                        $nombreEtudiantsInscrits = 0;
                    @endphp
                    
                    @foreach($formation->classes as $classe)
                        @php
                            $nombreEtudiantsInscrits += $classe->etudiants->count();
                        @endphp
                    @endforeach
                    
                    <p><strong>Nombre d'étudiants inscrits :</strong> {{ $nombreEtudiantsInscrits }}</p> 
                    <p><strong>Nombre de points :</strong> {{ $formation->pointsTotal() }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

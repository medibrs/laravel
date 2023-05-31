@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Nombre de points de la formation "{{ $formation->libelle }}"</div>

                    <div class="card-body">
                        <p>Le nombre de points de la formation "{{ $formation->libelle }}" est de : {{ $points }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


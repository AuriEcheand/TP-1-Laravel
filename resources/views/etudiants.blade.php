@extends('layout.extention')

@section('content')
    

<div class="students-list">
<h1>Liste des Étudiants</h1>
<a href="{{ route('creerEtudiant') }}"class="btn btn-primary" >Ajouter un étudiant</a>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Date de Naissance</th>
            <th>Afficher</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->adresse }}</td>
                <td>{{ $etudiant->phone }}</td>
                <td>{{ $etudiant->date_de_naissance }}</td>
                <td><a href="{{ route('etudiant.show', $etudiant->id) }}">Afficher</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
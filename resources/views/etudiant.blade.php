@extends('layout.extention')

@section('content')

<div class="student-details">
    <h1>Détails de l'Étudiant</h1>

    <div class="student-info">
        <strong>Nom:</strong> {{ $etudiant->nom }}<br>
        <strong>Adresse:</strong> {{ $etudiant->adresse }}<br>
        <strong>Email:</strong> {{ $etudiant->email }}<br>
        <strong>Téléphone:</strong> {{ $etudiant->phone }}<br>
        <strong>Date de Naissance:</strong> {{ $etudiant->date_de_naissance }}<br>
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-info">Modifier</a>
    </div>

    <form  method="POST" action="{{ route('etudiant.destroy', $etudiant->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    </div>

    @endsection
@extends('layout.extention')

@section('content')
<div class="edit-student-form">
<h1>Modifier un Étudiant</h1>

    <form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $etudiant->nom }}" required><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" value="{{ $etudiant->adresse }}" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ $etudiant->email }}" required><br>

        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="phone" value="{{ $etudiant->phone }}" required><br>

        <label for="date_de_naissance">Date de Naissance :</label>
        <input type="date" id="date_de_naissance" name="date_de_naissance" value="{{ $etudiant->date_de_naissance }}" required><br>

        <div>
            <label for="ville_id">Ville</label>
            <select name="ville_id" id="ville_id">
                @foreach(\App\Models\Ville::all() as $ville)
                <option value="{{ $ville->id }}" {{ $etudiant->ville_id == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Modifier Étudiant</button>
    </form>
</div>
    
@endsection
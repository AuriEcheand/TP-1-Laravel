@extends('layout.extention')

@section('content')
<div class="form-container">
<h1>Ajouter un Étudiant</h1>

<form action="{{ route('etudiant.store') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Téléphone :</label>
    <input type="text" id="phone" name="phone" required><br>

    <label for="date_de_naissance">Date de Naissance :</label>
    <input type="date" id="date_de_naissance" name="date_de_naissance" required><br>

    <div>
        <label for="ville_id">Ville</label>
        <select name="ville_id" id="ville_id">
            @foreach(\App\Models\Ville::all() as $ville)
            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Ajouter Étudiant</button>
</form>
</div>

@endsection
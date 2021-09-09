@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{ ($user->id) }}</p>
        <p>Nom : {{ ($user->nom) }}</p>
        <p>Prénom : {{ ($user->prenom) }}</p>
        <p>Age : {{ ($user->age) }}</p>
        <p>Date de naissance : {{ ($user->date_naissance) }}</p>
        <p>Email : {{ ($user->email) }}</p>
        <p>Mot de Passe : {{ ($user->mot_passe) }}</p>
        <p>Photo de Profil: {{ ($user->photo_profile) }}</p>
        <p>role_id : {{ ($user->role_id) }}</p>

    </div>

@endsection
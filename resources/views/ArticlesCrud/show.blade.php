@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{ ($article->id) }}</p>
        <p>Nom : {{ ($article->nom) }}</p>
        <p>Description : {{ ($article->description) }}</p>
        <p>Date de publication : {{ ($article->date_publication) }}</p>
        <p>role_id : {{ ($article->role_id) }}</p>

    </div>

@endsection
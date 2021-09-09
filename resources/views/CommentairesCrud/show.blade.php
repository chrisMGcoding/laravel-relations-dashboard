@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{ ($commentaire->id) }}</p>
        <p>Contenu : {{ ($commentaire->contenu) }}</p>
        <p>Article_id : {{ ($commentaire->article_id) }}</p>

    </div>

@endsection
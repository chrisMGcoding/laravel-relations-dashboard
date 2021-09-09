@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{ ($role -> id) }}</p>
        <p>Image : {{ ($role -> nom) }}</p>

    </div>

@endsection
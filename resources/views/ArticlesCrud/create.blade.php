@extends('template.template')

@section('content')

<div class="container">

    <h1 class="text-center my-3">Créer Articles</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('articles.store') }}" method="post">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" type="text" name="nom" value="{{ old('nom') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" type="text" name="description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="text" class="form-control" type="text" name="date_publication" value="{{ old('date_publication') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection
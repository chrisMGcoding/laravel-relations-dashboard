@extends('template.template')

@section('content')

    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articles.update', $article->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" type="text" name="nom" value="{{ $article->nom }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" type="text" name="description" value="{{ $article->description }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de publication</label>
            <input type="text" class="form-control" type="text" name="date_publication" value="{{ $article->date_publication }}">
        </div>
        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="text" class="form-control" name="user_id" value="{{ $article->user_id }}">
        </div>

        <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection

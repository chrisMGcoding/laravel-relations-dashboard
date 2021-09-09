@extends('template.template')

@section('content')

<div class="container">

    <h1 class="text-center my-3">Créer Commentaire</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('commentaires.store') }}" method="post">
    @csrf

        <div class="mb-3">
          <label class="form-label">contenu</label>
          <input name="contenu" value="{{ old('contenu') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Article_ID</label>
            <input name="article_id" value="{{ old('article_id') }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection
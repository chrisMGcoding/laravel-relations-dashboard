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

        <form action="{{ route('commentaires.update', $commentaire->id)}}" method="post">
        @csrf
        @method("PUT")

                
            <div class="mb-3">
                <label class="form-label">contenu</label>
                <input name="contenu" value="{{ $commentaire->contenu }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Article_ID</label>
                <input name="article_id" value="{{ $commentaire->article_id }}" class="form-control">
            </div>


        <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection
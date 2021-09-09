@extends('template.template')

@section('content')

<div class="container">

    <h1 class="text-center my-3">Créer Role</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('roles.store') }}" method="post">
    @csrf

        <div class="mb-3">
          <label class="form-label">Nom</label>
          <select name="nom" value="{{ old('nom') }}" class="form-control">
            <option value="admin">Admin</option>
            <option value="editeur">Editeur</option>
            <option value="visiteur">Visiteur</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection
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

        <form action="{{ route('roles.update', $role->id)}}" method="post">
        @csrf
        @method("PUT")


        <div class="mb-3">

            <label class="form-label">Nom</label>

            <select name="nom" value="{{ old('nom') }}" class="form-control">
              <option value="admin">Admin</option>
              <option value="editeur">Editeur</option>
              <option value="visiteur">Visiteur</option>
            </select>

        </div>

        <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection

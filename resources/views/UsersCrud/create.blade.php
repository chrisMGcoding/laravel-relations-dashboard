@extends('template.template')

@section('content')

<div class="container">

    <h1 class="text-center my-3">Créer User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" type="text" name="nom" value="{{ old('nom') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" class="form-control" type="text" name="prenom" value="{{ old('prenom') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">age</label>
            <input class="form-control" name="age" value="{{ old('age') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de Naissance</label>
            <input type="text" class="form-control" name="date_naissance" value="{{ old('date_naissance') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de Passe</label>
            <input type="text" class="form-control" name="mot_passe" value="{{ old('mot_passe') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo de Profil</label>
            <input class="form-control" type="file" name="photo_profile" value="{{ old('photo_profile') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Role ID</label>
            <input type="text" class="form-control" name="role_id" value="{{ old('role_id') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection
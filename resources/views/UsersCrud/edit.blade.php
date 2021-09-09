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

        <form action="{{ route('videos.update', $video->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" type="text" name="nom" value="{{ $user->nom }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" class="form-control" type="text" name="prenom" value="{{ $user->prenom }}">
        </div>
        <div class="mb-3">
            <label class="form-label">age</label>
            <input class="form-control" name="age" value="{{ $user->age }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date de Naissance</label>
            <input type="text" class="form-control" name="date_naissance" value="{{ $user->date_naissance }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de Passe</label>
            <input type="text" class="form-control" name="mot_passe" value="{{ $user->mot_passe }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo de Profil</label>
            <input class="form-control" type="file" name="photo_profile" value="{{ $user->photo_profile }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Role ID</label>
            <input type="text" class="form-control" name="role_id" value="{{ $user->role_id }}">
        </div>
        <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection

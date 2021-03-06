@extends('template.template')

@section('content')

<div class="container d-flex justify-content-center">

    <h1>Vidéo</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('users.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
                <th scope="col">date de naissance</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Photo de profile</th>
                <th scope="col">Role ID</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($user as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->nom) }}</td>
                <td>{{ ($item->prenom) }}</td>
                <td>{{ ($item->age) }}</td>
                <td>{{ ($item->date_naissance) }}</td>
                <td>{{ ($item->email) }}</td>
                <td>{{ ($item->mot_passe) }}</td>
                <td><img style="width: 40px" src="{{ asset('image/' . $item->photo_profile) }}" alt=""></td>
                <td>{{ ($item->role_id) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('users.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('users.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('users.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endsection
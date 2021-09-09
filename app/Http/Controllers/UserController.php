<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('pages.users', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UsersCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'age' => ['required'],
            'date_naissance' => ['required'],
            'email' => ['required'],
            'mot_passe' => ['required'],
            'photo_profile' => ['required'],
            'role_id' => ['required']
        ]);

        $table = new User;

        $table -> nom = $request -> nom;
        $table -> prenom = $request -> prenom;
        $table -> age = $request -> age;
        $table -> date_naissance = $request -> date_naissance;
        $table -> email = $request -> email;
        $table -> mot_passe = $request -> mot_passe;
        $table -> photo_profile = $request -> file("photo_profile") -> hashName();
        $table -> role_id = $request -> role_id;

        $table -> save();

        $request -> file("photo_profile") -> storePublicly("image", "public");

        return redirect() -> route('users.index') -> with('message', 'User créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('UsersCrud.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('UsersCrud.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request -> validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'age' => ['required'],
            'date_naissance' => ['required'],
            'email' => ['required'],
            'mot_passe' => ['required'],
            'photo_profile' => ['required'],
            'role_id' => ['required']
        ]);

        Storage::disk('public') -> delete('image/' . $user->photo_profile);

        $user -> nom = $request -> nom;
        $user -> prenom = $request -> prenom;
        $user -> age = $request -> age;
        $user -> date_naissance = $request -> date_naissance;
        $user -> email = $request -> email;
        $user -> mot_passe = $request -> mot_passe;
        $user -> photo_profile = $request -> file("photo_profile") -> hashName();
        $user -> role_id = $request -> role_id;

        $user -> save();

        $request() -> file("photo_profile") -> storePublicly("image", "public");

        return redirect() -> route('users.index') -> with('message', 'User modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk('public') -> delete('image/' . $user->photo_profile);

        $user -> delete();

        return redirect() -> route('users.index') -> with('message', 'User supprimé');
    }
}

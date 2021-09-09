<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaire = Commentaire::all();
        return view('pages.commentaires', compact('commentaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CommentairesCrud.create');
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
            'contenu' => ['required'],
            'article_id' => ['required']
        ]);

        $table = new Commentaire;

        $table -> contenu = $request -> contenu;
        $table -> article_id = $request -> article_id;

        $table -> save();

        return redirect() -> route('commentaires.index') -> with('message', 'Commentaire créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        return view('CommentairesCrud.show', compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return view('CommentairesCrud.edit', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $request -> validate([
            'contenu' => ['required'],
            'article_id' => ['required']
        ]);

        $commentaire -> contenu = $request -> contenu;
        $commentaire -> article_id = $request -> article_id;

        $commentaire -> save();

        return redirect() -> route('commentaires.index') -> with('message', 'Commentaire créé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire -> delete();

        return redirect() -> route('commentaires.index') -> with('message', 'Commentaire supprimé');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('pages.articles', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ArticlesCrud.create');
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
            'description' => ['required'],
            'date_publication' => ['required'],
            'user_id' => ['required']
        ]);

        $table = new Article;

        $table -> nom = $request -> nom;
        $table -> description = $request -> description;
        $table -> date_publication = $request -> date_publication;
        $table -> user_id = $request -> user_id;

        $table -> save();

        return redirect() -> route('articles.index') -> with('message', 'Article créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('ArticlesCrud.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('ArticlesCrud.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request -> validate([
            'nom' => ['required'],
            'description' => ['required'],
            'date_publication' => ['required'],
            'user_id' => ['required']
        ]);

        $article -> nom = $request -> nom;
        $article -> description = $request -> description;
        $article -> date_publication = $request -> date_publication;
        $article -> user_id = $request -> user_id;

        $article -> save();

        return redirect() -> route('articles.index') -> with('message', 'Article modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article -> delete();

        return redirect() -> route('articles.index') -> with('message', 'Article supprimé');
    }
}

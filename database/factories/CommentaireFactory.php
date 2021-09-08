<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commentaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenu' => $this -> faker -> realText($maxNbChars = 199, $indexSize = 1),
            'article_id' => $this -> faker -> numberBetween($min = 1, count(Article::all()))
        ];
    }
}

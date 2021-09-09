<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this -> faker -> name('male'|'female'),
            'description' => $this -> faker -> realText($maxNbChars = 300, $indexSize = 4),
            'date_publication' => $this -> faker -> date($format = 'Y-m-d', $max = 'now'),
            'user_id' => $this -> faker -> numberBetween($min = 1, count(User::all()))
        ];
    }
}

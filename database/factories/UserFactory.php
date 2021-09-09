<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this -> faker -> name('male'|'female'),
            'prenom' => $this -> faker -> firstName('male'|'female'),
            'age' => $this -> faker -> numberBetween($min = 10, $max = 99),
            'date_naissance' => $this -> faker -> date($format = 'Y-m-d', $max = 'now'),
            'email' => $this -> faker -> email,
            'mot_passe' => $this -> faker -> password,
            'photo_profile' => $this -> faker -> imageUrl($width = 640, $height = 480),
            'role_id' => $this -> faker -> numberBetween($min = 1, count(Role::all()))
        ];
    }
}

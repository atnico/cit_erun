<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Level;
use App\Models\Ville;
use App\Models\Categorie;
use App\Models\Environnement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'pseudo' => $this->faker->firstName(),
            'image' => 'https://via.placeholder.com/150',
            'description' => $this->faker->sentences(5,true),
            'nb_participants' => $this->faker->randomDigit,
            'level_id' => rand(1, Level::count()),
            'environnement_id' => rand(1, Environnement::count()),
            'categorie_id' => rand(1, Categorie::count()),
            'user_id' => rand(1, User::count()),
            'ville_id' => rand(1, Ville::count()),


        ];
    }
}

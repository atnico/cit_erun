<?php

namespace Database\Factories;

use App\Models\User;
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

            'user_ID' => auth()->user()->id,
            'nom' => $this->faker->sentence(rand(1,8),true),
            'image' => 'https://via.placeholder.com/150',
            'description' => $this->faker->sentences(5,true),
            'nb_participants' => $this->faker->randomDigit

        ];
    }
}

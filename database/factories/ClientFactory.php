<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nom' => $this->faker->lastName(),
        'prenoms' => $this->faker->firstName(),
        'numero_cnib' => $this->faker->unique()->numerify('##########'),
        'date_delivrance' => $this->faker->date(),
        'date_expiration' => $this->faker->date(),
        'telephone_secondaire' => $this->faker->phoneNumber(),
        'date_naissance' => $this->faker->date(),
        'lieu_naissance' => $this->faker->city(),
        'lieu_delivrance' => $this->faker->city(),
    ];
}

}

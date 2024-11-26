<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'client_id' => \App\Models\Client::factory(),
        'date' => $this->faker->date(),
        'type_transaction_id' => \App\Models\TypeTransaction::factory(),
    ];
}

}

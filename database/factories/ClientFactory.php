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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'documentType' => $this->faker->randomNumber(9, true),
            'documentNumber' => $this->faker->randomNumber(9, true),
            'city' => $this->faker->city(),
            'state' => $this->faker->sentence(),
            'country' => $this->faker->country(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}

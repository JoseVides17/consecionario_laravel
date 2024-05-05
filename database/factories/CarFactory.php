<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
            'brand_id' => $this->faker->numberBetween(1, 10),
            'model' => $this->faker->name(),
            'year' => $this->faker->year(),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomFloat(2, 10),
            'image' => $this->faker->imageUrl(),
            'stock' => $this->faker->numberBetween(1, 10)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cellphone>
 */
class CellphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_name' => $this->faker->company,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'released' => $this->faker->date(),
        ];
    }
}

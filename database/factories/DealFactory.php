<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(5),
            'amount' => fake()->numberBetween(100000, 9000000),
            'company_id' => fake()->numberBetween(1, 1000),
            'pipeline_id' => fake()->numberBetween(1, 1000),
            'stage_id' => fake()->numberBetween(1, 1000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pipeline>
 */
class PipelineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(4),
            // 'purpose_id' => 2,
            'purpose_id' => fake()->numberBetween(1, 2),
            // 'user_id' => 1,
            'user_id' => fake()->numberBetween(1, 100),
        ];
    }
}

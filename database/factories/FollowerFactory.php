<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Follower;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follower>
 */
class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'deal_id' => fake()->numberBetween(1, 20),
            // 'user_id' => fake()->numberBetween(1, 3),
            // 'is_owner' => false,

            // Add followers to a deal
            'deal_id' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 3),
            // 'is_owner' => false,
        ];
    }
}

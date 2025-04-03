<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use App\Models\Review;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     
     *
     * @return array<string, mixed>
     */
    protected $model = Review::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // creates a new user if one is not already made
            'reviewable_id' => $this->faker->numberBetween(1, 30),
            'reviewable_type' => $this->faker->randomElement(['App\Models\Homestay', 'App\Models\Activity']),
            'rating' => $this->faker->numberBetween(3, 5), // Random rating between 3 and 5
            'comment' => $this->faker->sentence(), // creates a random review comment
        ];
    }
}

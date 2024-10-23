<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1,10),
            'title' => fake()->text(20),
            'body' => fake()->text(200),
            'likes' => fake()->numberBetween(0,1),
            'dislikes' => fake()->numberBetween(0,1)
        ];
    }
}

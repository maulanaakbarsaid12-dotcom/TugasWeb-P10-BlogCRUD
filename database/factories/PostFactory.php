<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{public function definition(): array
{
    return [
        'title' => fake()->sentence(6),
        'body' => fake()->paragraphs(3, true),
    ];
}
}
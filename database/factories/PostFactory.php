<?php

namespace Database\Factories;

use App\Models\User;
use App\services\ImageService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imgUrl = 'https://picsum.photos/800/600?random=' . rand(1, 10000);
        $userIDs = User::pluck('id');
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'body' => fake()->paragraphs(rand(2, 5), true),
            'cover_img' => ImageService::generateRandomImageUrl(),
            'is_published' => fake()->boolean(),
            'is_featured' => fake()->boolean(),
            'user_id' => $userIDs->random()
        ];
    }
}

<?php

namespace Database\Factories;

use App\services\ImageService;
use App\Enums\ProjectStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->sentences(rand(2, 3), true),

            'cover_img' => ImageService::generateRandomImageUrl(),
            'status' => fake()->randomElement(array_map(fn($enum) => $enum->value, ProjectStatusEnum::cases())),
            'start_date' => now()->addDays((rand(1, 7))),
            'end_date' => fake()->dateTimeBetween('+2 weeks', '+6 months')
        ];
    }
}

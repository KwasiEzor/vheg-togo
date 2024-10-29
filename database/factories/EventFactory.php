<?php

namespace Database\Factories;

use App\Enums\EventStatusEnum;
use App\Services\ImageService; // Make sure the namespace is correct
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentences(rand(2, 3), true),
            'location' => $this->faker->city(),
            'organizer' => $this->faker->company(),
            'cover_img' => ImageService::generateRandomImageUrl(),
            'status' => $this->faker->randomElement(array_map(fn($enum) => $enum->value, EventStatusEnum::cases())), // Use enum values
            'start_date' => $this->faker->dateTime(now()->addDays(rand(1, 30))),
            'end_date' => $this->faker->dateTimeBetween('+2 weeks', '+1 year'),
        ];
    }
}

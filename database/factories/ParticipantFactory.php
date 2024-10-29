<?php

namespace Database\Factories;

use App\Enums\ProjectParticipantRoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bio' => $this->faker->sentences(rand(2, 3), true),
            'profession' => $this->faker->jobTitle(),
            'date_of_birth' => $this->faker->dateTimeBetween('-40 years', '-18 years'),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'zip_code' => $this->faker->postcode(),
            'phone_number' => $this->faker->phoneNumber(),
            'joined_at' => $this->faker->dateTimeBetween('-2 years', '+2 years'),
            'user_id' => User::factory(),
            'role' => $this->faker->randomElement(array_map(fn($enum) => $enum->value, ProjectParticipantRoleEnum::cases()))
        ];
    }
}

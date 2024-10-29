<?php

namespace Database\Factories;

use App\Enums\OrganizerTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organizer>
 */
class OrganizerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstname = $this->faker->firstName();
        $lastname = $this->faker->lastName();
        $logo = 'https://avatar.iran.liara.run/username?username=[' . $firstname . '+' . $lastname . ']';
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentences(rand(2, 3), true),
            'organizer_type' => $this->faker->randomElement(array_map(fn($enum) => $enum->value, OrganizerTypeEnum::cases())),
            'contact_email' => $this->faker->safeEmail(),
            'contact_number' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'logo' => $logo,
            'user_id' => User::factory()
        ];
    }
}

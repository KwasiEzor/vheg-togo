<?php

namespace Database\Factories;

use App\Enums\FundStatusEnum;
use App\Models\Category;
use App\Models\Project;
use App\services\ImageService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fund>
 */
class FundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIDs = Category::pluck('id');
        $projectIDS = Project::pluck('id');

        return [
            'title' => $this->faker->sentence(),
            'cover_img' => ImageService::generateRandomImageUrl(),
            'description' => $this->faker->paragraphs(rand(3, 6), true),
            'amount' => $this->faker->randomElement([1000000, 2000000, 3000000, 40000, 5000000]),
            'status' => $this->faker->randomElement(FundStatusEnum::values()),
            'category_id' => $categoryIDs->random(),
            'project_id' => $projectIDS->random()

        ];
    }
}

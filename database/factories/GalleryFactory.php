<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Support\Str;
use App\services\ImageService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
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
            'description' => $this->faker->paragraph(),
            'cover_img' => ImageService::generateRandomImageUrl(),
            'galleryable_id' => null,
            'galleryable_type' => null,
        ];
    }

    public function withImage()
    {
        $filename = 'image-' . Str::random(8);
        return $this->afterCreating(function (Gallery $gallery) use ($filename) {
            $gallery->addMediaFromUrl(ImageService::generateRandomImageUrl())
                ->usingName('image')
                ->usingFileName($filename)
                ->toMediaCollection('images');
        });
    }
}

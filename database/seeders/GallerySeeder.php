<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Seed 5 galleries associated with random Events
        Gallery::factory(5)
            ->withImage()
            ->create([
                'galleryable_id' => Event::inRandomOrder()->first()->id,
                'galleryable_type' => Event::class,
            ]);

        // Seed 10 galleries associated with random Projects
        Gallery::factory(10)
            ->withImage()
            ->create([
                'galleryable_id' => Project::inRandomOrder()->first()->id,
                'galleryable_type' => Project::class,
            ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $categoryIDs = Category::pluck('id');

        foreach ($projects as $project) {
            $project->categories()->attach($categoryIDs->random(rand(1, 2)));
        }
    }
}

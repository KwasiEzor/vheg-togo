<?php

namespace Database\Seeders;

use App\Enums\ProjectParticipantRoleEnum;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIDs = User::pluck('id');
        $projects = Project::all();

        foreach ($projects as $project) {

            $project->participants()->attach($userIDs->random(), [
                'user_role' => fake()->randomElement(array_map(fn($enum) => $enum->value, ProjectParticipantRoleEnum::cases()))
            ]);
        }
    }
}

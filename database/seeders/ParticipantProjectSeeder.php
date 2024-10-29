<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $participantIDs = Participant::pluck('id');

        foreach ($projects as $project) {
            $project->participants()->attach($participantIDs->random(rand(5, 20)), [
                'joined_at' => fake()->dateTimeBetween('-2 years', '+1 year')
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventOrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = Event::all();
        $organizerIDs = Organizer::pluck('id');

        foreach ($events as $event) {
            $event->organizers()->attach($organizerIDs->random(rand(1, 3)));
        }
    }
}

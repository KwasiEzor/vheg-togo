<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = Event::all();
        $participantIDs = Participant::pluck('id');

        foreach ($events as $event) {
            $event->participants()->attach($participantIDs->random(rand(5, 20)));
        }
    }
}

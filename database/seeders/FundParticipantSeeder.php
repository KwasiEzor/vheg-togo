<?php

namespace Database\Seeders;

use App\Enums\ProjectParticipantRoleEnum;
use App\Models\Fund;
use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funds = Fund::all();
        $participantIDs = Participant::query()
            ->where('role', ProjectParticipantRoleEnum::SPONSOR)
            ->orWhere('role', ProjectParticipantRoleEnum::CONTRIBUTOR)
            ->pluck('id');

        foreach ($funds as $fund) {
            $fund->particpants()->attach($participantIDs->random(rand(1, 3)));
        }
    }
}

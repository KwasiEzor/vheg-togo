<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Fund;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Fund::factory(10)->create();
    }
}

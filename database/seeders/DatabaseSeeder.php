<?php

namespace Database\Seeders;

use App\Models\Post;
use Spatie\Tags\Tag;

use App\Models\Category;
use App\Models\Fund;
use App\Models\Project;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categoryData = [
            'Community Outreach',
            'Fundraising Initiatives',
            'Volunteer Spotlights',
            'Project Updates',
            'Impact Stories',
            'Donor Appreciation',
            'Event Highlights',
            'Partnerships',
            'Volunteer  Resources',
            'Volunteer Training ',
            'Campaign Announcements',
            'Environmental Sustainability',
            'Health and Wellness',
            'Education and Literacy',
            'Disaster Relief',
            'Animal Welfare',
            'Youth Empowerment',
            'Senior Support',
            'Diversity Inclusion',
            'Advocacy Awareness',
            'Tips for Volunteers'
        ];

        foreach ($categoryData as  $value) {

            Category::factory()->create([
                'title' => $value
            ]);
        }


        $this->call([
            UserSeeder::class,
            ProjectSeeder::class,

            EventSeeder::class,
            OrganizerSeeder::class,
            ParticipantSeeder::class,
            ProjectSeeder::class,
            EventOrganizerSeeder::class,
            ParticipantProjectSeeder::class,
            EventParticipantSeeder::class,


        ]);



        $tagsData = ['humanitarian aid', 'volunteerism', 'global relief', 'community support', 'Charity work', 'Non profit work', 'social goods', 'sustainable development', 'crisis response', 'human rights', 'disaster relief', 'social impact', 'empowering'];

        foreach ($tagsData as $item) {
            Tag::create([
                'name' => $item
            ]);
        }


        $categories = Category::all();
        $tags = Tag::all();
        Post::factory(30)->create()->each(function ($post) use ($categories, $tags) {
            $post->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
            $post->attachTags(
                $tags->random(rand(2, 3))->pluck('name')->toArray()
            );
        });

        Fund::factory(10)->create();

        $this->call(FundParticipantSeeder::class);
        $this->call(GallerySeeder::class);
    }
}

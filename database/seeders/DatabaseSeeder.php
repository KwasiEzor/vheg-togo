<?php

namespace Database\Seeders;

use App\Models\Post;
use Spatie\Tags\Tag;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


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

        $categoryData = ['Volunteerism', 'Medical', 'Donation', 'Fund Raise', 'Social Actions', 'Community', 'Development', 'Humanitarian Aid'];

        foreach ($categoryData as  $value) {

            Category::factory()->create([
                'title' => $value
            ]);
        }

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
    }
}

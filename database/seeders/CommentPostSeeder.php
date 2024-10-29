<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $userIDs = User::pluck('id');

        foreach ($posts as $post) {
            // Generate a set number of top-level comments for each post
            foreach (range(1, rand(3, 5)) as $_) {
                $comment = $post->comments()->create([
                    'content' => fake()->sentences(rand(1, 3), true),
                    'user_id' => $userIDs->random()
                ]);

                // Recursively add replies to the comment
                $this->addReplies($comment, $userIDs, 2);  // Adjust the depth if needed
            }
        }
    }

    /**
     * Recursively add nested replies to a comment.
     */
    private function addReplies(Comment $comment, $userIDs, $depth)
    {
        // Stop recursion after reaching the specified depth
        if ($depth === 0) {
            return;
        }

        // Generate a set number of replies for each comment
        foreach (range(1, rand(1, 3)) as $_) {
            $reply = $comment->children()->create([
                'content' => fake()->sentences(rand(1, 3), true),
                'user_id' => $userIDs->random()
            ]);

            // Recursively add replies to this reply
            $this->addReplies($reply, $userIDs, $depth - 1);
        }
    }
}

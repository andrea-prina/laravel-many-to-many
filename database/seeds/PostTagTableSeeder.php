<?php

use App\models\Post;
use App\models\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $tags = Tag::all();

        foreach ($posts as $post) {

            // Assign to each post a 0 to 5 number of random tags from the ones in the database
            
            $tagsNumber = random_int(0, 5);

            $selectedTags = $tags->random($tagsNumber);

            $post->tags()->sync($selectedTags);
        }

    }
}

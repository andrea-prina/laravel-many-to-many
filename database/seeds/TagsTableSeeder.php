<?php

use App\models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['DIY', 'meme', 'trending', 'learning', 'italy'];

        foreach ($tags as $tag) {
            
            $newTag = new Tag();
            $newTag->name = $tag;

            $newTag->save();
        }
    }
}

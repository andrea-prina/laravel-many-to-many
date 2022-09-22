<?php

use App\models\Category;
use App\models\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();
        $category = Category::all();

        for ($i=0; $i < 50; $i++) { 
            
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->category_id = $faker->randomElement($category)->id;
            $newPost->title = $faker->catchPhrase();
            $newPost->post_content = $faker->paragraphs(2, true);
            $newPost->post_image = $faker->imageUrl(360, 360, 'animals', true, 'cats');
            $newPost->post_date = $faker->dateTime();
    
            $newPost->save();
        }
    }
}
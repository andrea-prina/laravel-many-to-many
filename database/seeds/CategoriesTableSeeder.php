<?php

use App\models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'news',
            'sport',
            'videogames',
            'funny',
            'music',
            'food'
        ];

        foreach ($categories as $categoryName) {
            
            $newCategory = new Category();
            $newCategory->name = $categoryName;
            $newCategory->color = $faker->hexColor();
            $newCategory->slug = Str::slug($categoryName, '-');

            $newCategory->save();
        }
    }
}

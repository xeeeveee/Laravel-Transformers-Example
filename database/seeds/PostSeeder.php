<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    private $postCount = 20;

    private $categoriesCount = 5;

    private $categoriesPerPost = [1, 5];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_GB');
        $categories = [];

        foreach (range(1, $this->categoriesCount) as $index) {
            $category             = new Category();
            $category->name       = $faker->word;
            $category->created_at = $faker->dateTime;
            $category->updated_at = $faker->dateTime;
            $category->save();

            $categories[$index] = $category;
        }

        foreach (range(1, $this->postCount) as $index) {
            $post             = new Post();
            $post->title      = $faker->sentence();
            $post->content    = '<p>' . join('</p><p>', $faker->paragraphs()) . '</p>';
            $post->created_at = $faker->dateTime;
            $post->updated_at = $faker->dateTime;
            $post->save();

            foreach(range(1, rand($this->categoriesPerPost[0], $this->categoriesPerPost[1])) as $categoryIndex) {
                $post->categories()->save($categories[(rand(1, $this->categoriesCount))]);
            }
        }
    }
}

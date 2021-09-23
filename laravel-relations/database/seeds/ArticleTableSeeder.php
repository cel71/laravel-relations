<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($x = 0; $x < 50; $x++) {
            $article = new Article();
            $article->title = $faker->sentence();
            $article->abstract = $faker->paragraph(5);
            $article->author = $faker->name();
            $article->save();
        }
    }
}

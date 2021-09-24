<?php

use App\Article;
use App\Author;
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
        $authorList = [
            'autore1',
            'autore2',
            'autore3',
            'autore4',
            'autore5',
            'autore6'
        ];

        $listAuthorId = [];

        foreach ($authorList as $author) {
            $authorObject = new Author();
            $authorObject->name = $author;
            $authorObject->surname = $author;
            $authorObject->save();
            $listAuthorId[] = $authorObject->id;
        };

        for ($x = 0; $x < 50; $x++) {
            $article = new Article();
            $article->title = $faker->sentence();
            $article->abstract = $faker->paragraph(5);
            $randAuthorKey = array_rand($listAuthorId, 1);
            $authorId = $listAuthorId[$randAuthorKey];
            $article->author_id = $authorId;
            $article->save();
        }
    }
}

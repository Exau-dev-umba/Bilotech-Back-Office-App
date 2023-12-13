<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::factory(150)->create();

        $articles->each(function ($article) {
            $article->images()->saveMany(Image::factory(3)->make());
        });
        
    }
}

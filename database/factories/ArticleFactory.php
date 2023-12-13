<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;
    
    public function definition()
    {
        
        return [
            'title' => fake()->sentence,
            'keyword' => fake()->word,
            'content' => fake()->paragraph,
            'country' => fake()->country,
            'city' => fake()->city,
            'price' => fake()->randomFloat(2, 10, 1000),
            'negociation' => fake()->boolean,
            'category_id' => fake()->numberBetween(1, 3), // Remplacez 1 et 10 par vos valeurs de catégorie
            'devise' => fake()->currencyCode,
            'user_id' => 2, // Remplacez 1 et 100 par vos valeurs d'utilisateur
            // Ajoutez d'autres champs de votre modèle d'article ici
        ];
    }


}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name' => fake()->word,
            'parent_id' => fake()->numberBetween(1, 10), // Supposons que vous avez des catégories parentes de 1 à 10
            'category_image' => fake()->imageUrl(400, 400), // URL d'image aléatoire
        ];
    }
}

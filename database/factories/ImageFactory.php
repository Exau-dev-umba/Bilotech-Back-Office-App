<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */


class ImageFactory extends Factory
{
    protected $model = Image::class;
    
    public function definition()
    {
        return [
            'article_id' => fake()->numberBetween(1 ),
            'image_path' => $this->faker->imageUrl(400, 400),
        ];
    }
}

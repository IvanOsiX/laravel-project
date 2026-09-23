<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'date' => fake()->date('d.m.Y'),
            'name' => fake()->sentence(4),
            'preview_image' => 'preview.jpg',
            'full_image' => 'full.jpeg',
            'shortDesc' => fake()->sentence(10),
            'desc' => fake()->paragraph(8),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->random()->id;
        return [
            'titre' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'category_id' => $category->id,
            'date_debut' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_expiration' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}

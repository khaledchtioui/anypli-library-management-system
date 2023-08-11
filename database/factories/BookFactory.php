<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'year' => $this->faker->numberBetween(1800, date('Y')),
            'availability' => $this->faker->boolean(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->numberBetween(1, 27) . '.jpg',
            ];
    }
}

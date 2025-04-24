<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' =>$this->faker->paragraph(),
            'year' => $this->faker->year(),
            'rating' =>$this->faker->randomFloat(1, 1, 10),
            'genre_id' => 1, // пока фиксированный жанр
            'created_at' => now(),
        ];
    }
}

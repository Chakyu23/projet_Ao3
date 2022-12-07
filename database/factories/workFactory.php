<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\work>
 */
class workFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(random_int(1, 4)),
            'user_id' => random_int(1, 25),
            'sumary' => fake()->text(),
            'chapter_max' => random_int(10, 50)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            'header1' => $this->faker->sentence(),
            'header2' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(50),
        ];
    }
}

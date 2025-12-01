<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'   => $this->faker->sentence(),
            'content' => $this->faker->paragraph(5),
            'author'  => $this->faker->name(),
            'icon'    => 'fas fa-file-alt', // default icon (optional)
        ];
    }
}

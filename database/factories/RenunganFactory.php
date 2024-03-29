<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RenunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(10,20)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode('')
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JemaatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->streetAddress(),
            'phone' => $this->faker->phoneNumber(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'jabatan_id' => mt_rand(1, 6)
        ];
    }
}

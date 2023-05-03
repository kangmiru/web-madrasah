<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Foto>
 */
class FotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(mt_rand(2,3)),
            'slug' => fake()->slug(),
            'caption' => fake()->paragraph(),
            'galery_id' => mt_rand(1,2)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumni>
 */
class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'slug' => fake()->slug(),
            'angkatan' => fake()->randomDigit(),
            'kuliah_kerja' => fake()->paragraph(mt_rand(2,3)),
            'kesan' => '<p>'. implode('</p><p>', fake()->paragraphs(mt_rand(5,10))). '</p>',
            'excerpt' => fake()->paragraph(10)
        ];
    }
}

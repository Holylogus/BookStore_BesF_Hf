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
            'cim'=>fake()->words(3),
            'megjelenes_datuma'=> fake()->date('Y-m-d'),
            'mufaj'=>fake()->words(1),
            'iroja'=>fake()->name(),
            'ar'=>fake('HU-HU')->numberBetween(0,50000),
        ];
    }
}

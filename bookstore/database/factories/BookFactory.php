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
        $faker = \Faker\Factory::create();
        return [
            'cim'=>$faker->words(3),
            'megjelenes_datuma' => $faker->date(),
            'mufaj'=>$faker->words(1),
            'iroja'=>$faker->name(),
            'ar'=>$faker->numberBetween(0,50000),
        ];
    }
}
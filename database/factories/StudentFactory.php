<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->name(),
           'grade_id' => fake()->numberBetween(1,35),
           'departement_id' => fake()->numberBetween(1,5),
           'email' => fake()->unique()->safeEmail(),
           'address' => fake()->address()
        ];
    }
}

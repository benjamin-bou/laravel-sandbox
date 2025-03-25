<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->numberBetween(20000, 80000),
            'description' => fake()->paragraph(),
        ];

        // php artisan tinker pour ouvrir un terminal Laravel lié au projet
        // App\Models\Job::factory(50)->create(); Pour créer 50 jobs
    }
}

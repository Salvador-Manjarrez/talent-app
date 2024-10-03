<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

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
            'title' => fake()->jobTitle,
            'type' => fake()->randomElement(['Crew', 'Talent', 'Project', 'Job']),
            'url' => fake()->url,
            'salary' => fake()->randomElement(['$50,0000 USD', '$85,000 USD', '$120,000 USD', '$27,000 USD']),
            'description' => fake()->sentence,
            'location' => 'London, UK',
            'img' => fake()->imageUrl(),
            'featured' => false ,
            'employer_id' => Employer::factory(),
        ];
    }
}

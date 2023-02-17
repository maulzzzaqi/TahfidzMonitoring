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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'class' => $this->faker->city(),
            'surah' => $this->faker->company(),
            'tester' => $this->faker->lastName(),
            'status' => $this->faker->postcode()
        ];
    }
}

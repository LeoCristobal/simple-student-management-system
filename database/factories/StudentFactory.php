<?php

namespace Database\Factories;

use App\Models\Teacher;
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
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
            'first_name' => fake()->firstName(),
            'middle_initial' => strtoupper(fake()->randomLetter()). '.',
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'email_address' => fake()->safeEmail(),
            'address' => fake()->address(),
            'contact' => fake()->phoneNumber()
        ];
    }
}

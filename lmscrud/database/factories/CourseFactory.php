<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coursename' => fake()->words(3, true), //"Introduction to Laravel")
            'courseteacher' => fake()->words(3, true), //"Introduction to Laravel")
            'coursecode' => fake()->words(3, true), //"Introduction to Laravel")
        ];
    }
}
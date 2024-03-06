<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Patient::class;
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'dob' => fake()->date('Y_m_d','now'),
            'gender' => fake()->randomElement(['male', 'female']),
            'phone' =>fake()->phoneNumber(),
            'email' =>fake()->unique()->safeEmail()
        ];
    }
}

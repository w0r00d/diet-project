<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrimaryMeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = primary_measurement::class;
    public function definition(): array
    {
        return [
 
            'measure_date' =>fake()->date('Y-M-D', 'now'),
            'weight' =>fake()->randomFloat(1),
            'height' =>fake()->randomFloat(1),
         ];
    }
}

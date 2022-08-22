<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TripsFactory extends Factory
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
            'from' => $this->faker->name(),
            'to' => $this->faker->name(),
            'dateTime' => $this->faker->dateTime(),
            'cost' => $this->faker->randomFloat(2,650,2000),
            'capacity' => $this->faker->numberBetween(1,14),
            'bookingfor' => 1
        ];
    }
}

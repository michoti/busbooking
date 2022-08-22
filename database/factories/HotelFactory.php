<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'price' => $this->faker->numberBetween(3000,5000),
            'description' => $this->faker->paragraph(3),
            'image' => 'img/room-'.$this->faker->numberBetween(1,3).'.jpg'
        ];
    }
}

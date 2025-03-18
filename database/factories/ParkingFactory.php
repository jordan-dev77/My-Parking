<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Parking;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking>
 */
class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_proprietaire' => fake()->name(),
            'nom_parking' => fake()->company(),
            'adresse_parking' => fake()->address(),
            'nombre_de_place' => fake()->numberBetween(10,500),
            
        ];
    }
}

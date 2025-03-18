<?php

namespace Database\Factories;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nom' => fake()->name(),
                'place_occuper'=>fake()->randomLetter().fake()->RandomDigitNotZero(),
                'marque_vehicule' => fake()->randomElement(['Toyota', 'Ford', 'Mercedes', 'BMW', 'Peugeot']),
                'immatriculation' => strtoupper(fake()->unique()->bothify('??-###-??')),
                'type_vehicule' => fake()->randomElement(['SUV', 'Berline', 'Camion', 'Moto']),
                'date_arriver' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
                'date_depart' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d H:i:s'),
                'solde' => fake()->randomFloat(5000, 1000, 2000),
    
        ];
    }
}

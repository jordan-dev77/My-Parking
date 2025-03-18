<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reservation;
use App\Models\Parking;
use App\Models\Contact;
use App\Models\Commentaire;
use Database\Factories\ReservationFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Reservation::factory(100)->create();
        Parking::factory(20)->create();
        Contact::factory(20)->create();
        Commentaire::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('marque_vehicule');
            $table->string('immatriculation');
            $table->string('type_vehicule');
            $table->dateTime('date_arriver');
            $table->dateTime('date_depart');
            $table->decimal('solde');
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('parking_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Reservations');
    }
};

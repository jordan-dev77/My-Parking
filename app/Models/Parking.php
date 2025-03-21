<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_parking',
        'adresse',
        'nombre_place',
        'tarif',
        'user_id',
        'nom_proprietaire'
    ];
    public function proprietaire()
    {
        return $this->belongTo(User::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}

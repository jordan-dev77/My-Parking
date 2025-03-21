<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'immatriculation',
        'marque_vehicule',
        'type_vehicule',
        'date_arriver',
        'date_depart',
        'solde',
        'user_id',
        'parking_id',

    ];
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function parking()
    {
        return $this->belongTo(Parking::class);
    }
    
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'immatriculation',
        'marque vehicule',
        'type vehicule',
        'date arriver',
        'date depart',
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

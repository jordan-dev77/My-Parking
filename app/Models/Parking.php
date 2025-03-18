<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom parking',
        'adresse',
        'nombre place',
        'tarif',
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

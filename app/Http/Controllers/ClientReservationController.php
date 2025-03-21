<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Parking;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\ParkingRequest;


class ClientReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->paginate(10);
        return view('clients.ListeReservation', compact('reservations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Parking $Parking)

    {
        request()->query('parking_id');
        return view('clients.reservation',compact('Parking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request,Parking $Parking)
    {
         
        // if ($Parking->nombre_place <= 0) {
        //     return redirect()->route('proprietaire.parking.show')->with('error', "Il n'y a plus de places disponibles pour ce parking.");
        // }
        
        
        $Parking = Parking::find($request->parking_id);
        dd($request->parking_id);
        

        $nombre_jours_seconde = strtotime($request->date_arriver) - strtotime($request->date_depart);

        $nombre_jours = $nombre_jours_seconde/ (60 * 60 * 24);

        $prix_total = $nombre_jours * $Parking->tarif;

        $user = Auth::user();
        Reservation::create([
            'user_id' => Auth::id(),
            'nom'=> $user->name,
            'parking_id' => $request->parking_id,
            'immatriculation' => $request->immatriculation,
            'marque_vehicule' => $request->marque_vehicule,
            'type_vehicule' => $request->type_vehicule,
            'date_arriver' => $request->date_arriver,
            'date_fin' => $request->date_depart,
            'solde' => $prix_total,]);

            $Parking->decrement('nombre_place');

            return redirect()->route('clients.reservation.index')->with('infos', 'La reservation  a bien été effectuer');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

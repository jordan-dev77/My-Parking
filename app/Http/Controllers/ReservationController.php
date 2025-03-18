<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Reservations = Reservation::paginate(10);
        
        


return view('proprietaires.Reservation', compact('Reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietaires.AddReservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $ReservationRequest)
    {
        Reservations::create($ReservationRequest->all());
        return redirect()->route('proprietaires.reservation.index')->with('infos', 'Le film a bien été créé');
        

    }

    /**
     * Display the specified resource.
     */
     public function show(Reservation $Reservation)
    {
         
         return view('proprietaires.VoirReservation', compact('Reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $Reservation)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $Reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $Reservation)
    { 
        
        $Reservation->delete();
        return back()->with('info', 'La reservation a bien été supprimé dans la base de données.');

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParkingRequest;
use Illuminate\Http\Request;
use App\Models\Parking;

class Parkingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Parkings = Parking::paginate(10);
        
        return view('proprietaires.Parkings', compact('Parkings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietaires.AddParking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParkingRequest $ParkingRequest)
    {
        Parking::create($ParkingRequest->all());
        return redirect()->route('proprietaires.parking.index')->with('infos', 'Le film a bien été créé');
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
    public function destroy(Parking $Parking)
    {
        $Parking->delete();
        return back()->with('info', 'Le Parking a bien été supprimé dans la base de données.');
    }
}

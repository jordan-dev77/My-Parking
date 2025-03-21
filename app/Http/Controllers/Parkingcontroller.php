<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParkingRequest;
use Illuminate\Http\Request;
use App\Models\Parking;
use Illuminate\Support\Facades\Auth;

class Parkingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Parkings = Parking::where('user_id',Auth::id())->paginate(10);
        
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
    public function store(ParkingRequest $request)
    {
        $user = Auth::user();
        Parking::create([
            'nom_proprietaire'=> $user->name,
            'nom_parking'=> $request-> nom_parking,
            'adresse'=>$request->adresse,
            'nombre_place'=> $request->nombre_place,
            'tarif'=> $request->tarif,
            'user_id'=> $user->id,
            
        ]);
        return redirect()->route('proprietaires.parking.index')->with('infos', 'Le parking a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parking $Parking)
    {
        return view('proprietaires.VoirParking', compact('Parking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parking $Parking)
    {
        return view('proprietaires.EditParking',compact('Parking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParkingRequest $request, Parking $Parking)
    {
        $Parking->update($request->all());
       return redirect()->route('proprietaires.parking.index')->with('infos', 'Le parking a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parking $Parking)
    {
        $Parking->delete();
        return  redirect()->route('proprietaires.parking.index')->with('info', 'Le parking a bien été suprimer');

    }
   

}

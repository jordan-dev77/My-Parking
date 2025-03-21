<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

class ClientController extends Controller
{
    public function recherche(Request $request,Parking $Parking)
    {
        
        $Recherche = $request->input('query');

        $parkings = [];

        if ($Recherche) {
            $parkings = Parking::where('nom_parking', 'LIKE', "%$Recherche%")
                ->orWhere('adresse', 'LIKE', "%$Recherche%")
                ->paginate(5);
        }
        return view('clients.index', compact('parkings', 'Recherche'));
       }

        public function contact(){
            return view('clients.contact');
        }
}

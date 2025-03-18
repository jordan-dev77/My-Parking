@extends('templates.templateproprietaires')

@section('body')
    <div class="container m-5 p-5 border rounded-5 shadow-lg">
        <h2 class="display-1 fw-bold p-5 text-center">My Parking</h2>
        <h2 class="text-center"> Information Sur La Reservation</h2>
        <div class="row m-5">
            <div class="col-6"><strong>NOM:</strong>{{$Reservation->nom}}</div>
            <div class="col-6"><strong>IMMATRICULATION:</strong>{{$Reservation->immatriculation}}</div>
        </div>
        <div class="row  m-5">
                <div class="col-6"><strong>MARQUE DU VEHICULE:</strong>{{$Reservation->marque_vehicule}}</div>
                <div class="col-6"><strong>TYPE DU VEHICULE:</strong>{{$Reservation->type_vehicule}}</div>
        </div>
        <div class="row  m-5">
               <div class="col-6"><strong> PLACE OCCUPER:</strong>{{$Reservation->place_occuper}}</div>
               <div class="col-6"><strong>DATE ARRIVER:</strong>{{$Reservation->date_arriver}}</div>
        </div>
        <div class="row  m-5">
               <div class="col-6"><strong>DATE DEPART:</strong>{{$Reservation->date_depart}}</div>
               <div class="col-6"><strong>SOLDE:</strong>{{$Reservation->solde}}</div>
        </div>
  </div>    
@endsection
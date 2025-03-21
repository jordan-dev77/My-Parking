@extends('templates.templateproprietaires')

@section('body')
          @if(session()->has('info'))
                <div class="bg-danger border rounded-5 text-white m-3 p-3">{{ session('error') }}</div>
           @endif
    <div class="container m-5 p-5 border rounded-5 shadow-lg">
        <h2 class="display-1 fw-bold p-5 text-center">My Parking</h2>
        <h2 class="text-center"> Information Sur Le Parking </h2>
        <div class="row m-5">
            <div class="col-6"><strong>NOM PARKING:</strong>{{$Parking->nom_parking}}</div>
            <div class="col-6"><strong>QUATIER:</strong>{{$Parking->adresse}}</div>
        </div>
        <div class="row  m-5">
                <div class="col-6"><strong>NOMBRE DE PLACE:</strong>{{$Parking->nombre_place}}</div>
                <div class="col-6"><strong>TARIF JOURNALIER:</strong>{{$Parking->tarif}}</div>

        <div>
            <a href="{{ route('clients.reservation.create', $Parking->id) }}" class="btn btn-secondary" >
                RESERVER
              </a>
        </div>
    
  </div>    
@endsection
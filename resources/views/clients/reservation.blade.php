<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container m-5 p-5 border rounded-5 shadow-lg">
        <h2 class="display-1 fw-bold p-5 text-center">My Parking</h2>
        <h2 class="text-center">Reservation</h2>
        <form action="{{ route('clients.reservation.store') }}"  method="POST">
                @csrf
                <input type="hidden"  name="parking_id"  value="{{$Parking->id}}">
            <div class="mb-3"> 
                <label for="immatriculation" class="form-label"><strong>IMMATRICULATION</strong></label>
                <input type="text" class="form-control @error('immatriculation') is-invalid @enderror"  name="immatriculation" placeholder="immatriculation" value="{{old('immatriculation')}}">
                         @error('immatriculation')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="marque_vehicule" class="form-label"><strong>MARQUE DU VEHICULE:</strong></label>
                <input type="text" class="form-control @error('marque_vehicule') is-invalid @enderror"  name="marque" placeholder="marque_vehicule" value="{{old('marque_vehicule')}}">
                         @error('marque_vehicule')
                             <div class="invalid-feedback">
                                  {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="type_vehicule" class="form-label"><strong>TYPE DU VEHICULE:</strong></label>
                <input type="text" class="form-control @error('type_vehicule') is-invalid @enderror"  name="type_vehicule" placeholder="type_vehicule" value="{{old('type_vehicule')}}">
                         @error('type_vehicule')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="date arriver" class="form-label"><strong>DATE ARRIVER:</strong></label>
                <input type="date" class="form-control @error('date_arriver') is-invalid @enderror"  name="date_arriver" placeholder="date arriver" value="{{old('date_arriver')}}">
                         @error('date_arriver')
                            <div class="invalid-feedback">
                                {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="date_depart" class="form-label"><strong>DATE DEPART:</strong></label>
                <input type="date" class="form-control @error('date_depart') is-invalid @enderror"  name="date_depart" placeholder="date depart" value="{{old('date_depart')}}">
                         @error('date_depart')
                           <div class="invalid-feedback">
                                {{$message}}
                           </div>
                          @enderror
            </div>
            <button type="submit" class="btn btn-secondary">RESERVER</button>
        </form>
    </div>
</body>
</html>
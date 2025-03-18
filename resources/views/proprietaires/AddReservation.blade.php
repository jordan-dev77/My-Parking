<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container m-5 p-5 border rounded-5 shadow-lg">
        <h2 class="display-1 fw-bold p-5 text-center">My Parking</h2>
        <h2 class="text-center">Reservation</h2>
        <form action="{{ route('proprietaires.reservation.store') }}"  method="">
            @csrf
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
                <label for="marque" class="form-label"><strong>MARQUE DU VEHICULE:</strong></label>
                <input type="text" class="form-control @error('marque') is-invalid @enderror"  name="marque" placeholder="marque" value="{{old('marque')}}">
                         @error('marque')
                             <div class="invalid-feedback">
                                  {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="type vehicule" class="form-label"><strong>TYPE DU VEHICULE:</strong></label>
                <input type="text" class="form-control @error('type vehicule') is-invalid @enderror"  name="type vehicule" placeholder="type vehicule" value="{{old('type vehicule')}}">
                         @error('type vehicule')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="date arriver" class="form-label"><strong>DATE ARRIVER:</strong></label>
                <input type="date" class="form-control @error('date arriver') is-invalid @enderror"  name="date arriver" placeholder="date arriver" value="{{old('date arriver')}}">
                         @error('date arriver')
                            <div class="invalid-feedback">
                                {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="date depart" class="form-label"><strong>DATE DEPART:</strong></label>
                <input type="date" class="form-control @error('date depart') is-invalid @enderror"  name="date depart" placeholder="date depart" value="{{old('date depart')}}">
                         @error('date depart')
                           <div class="invalid-feedback">
                                {{$message}}
                           </div>
                          @enderror
            </div>
            <button type="submit" class="btn btn-secondary">ENVOYER</button>
        </form>
    </div>
</body>
</html>
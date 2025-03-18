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
        <h2 class="text-center">Instription Parking</h2>
        <form action="" method="POST">
        @csrf 
            <div class="mb-3">
                <label for="nom_parking" class="form-label"><strong>NOM PARKING:</strong></label>
                <input type="text" class="form-control @error('nom_parking') is-invalid @enderror"  name="nom_parking" placeholder="nom parking "  value="{{old('nom_parking')}}">
                        @error("nom_parking")
                             <div class="invalid-feedback">
                             {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label"><strong>QUARTIER:</strong></label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror"  name="adresse" placeholder="quartier"  value="{{old('adresse')}}">
                         @error("adresse")
                             <div class="invalid-feedback">
                             {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="nombre_place" class="form-label"><strong>NOMBRE DE PLACE:</strong></label>
                <input type="number" class="form-control @error('nombre_place') is-invalid @enderror"  name="nombre_place" placeholder="nombre de place"  value="{{old('nombre_place')}}">
                         @error("nombre_place")
                             <div class="invalid-feedback">
                             {{$message}}
                             </div>
                          @enderror
            </div>
            <div class="mb-3">
                <label for="solde" class="form-label"><strong>SOLDE:</strong></label>
                <input type="number" class="form-control @error('solde') is-invalid @enderror" class="solde"  name="solde" placeholder="solde"  value="{{old('solde')}}">
                          @error('solde')
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
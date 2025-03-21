<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
</head>
<body>
  <div class="container border rounded-5 shadow-lg m-5 p-5 ">
           @if(session()->has('info'))
                <div class="bg-danger border rounded-5 text-white m-3 p-3">{{ session('info') }}</div>
           @endif
           
           @if(session()->has('bg-danger border rounded-5 text-white m-3 p-3'))
                <div class=" success border rounded-5 text-white m-3 p-3"->{{ session('infos') }}</div>
            @endif

    <header class="card-header">
      <h2 class="display-1 text-center mb-3 pb-3 fw-bold">Liste Des Parkings</h2>
        <a class="btn btn-info" href="{{ route('proprietaires.parking.create') }}">ajouter un Parking</a>
    </header>
<table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col"> nom parking</th>
                    <th scope="col">adresse parking</th>
                    <th scope="col">nombre de place</th>
                    

                  </tr>
                </thead>
                <tbody>
                @foreach($Parkings as $Parking)
<tr>
<td><strong>{{ $Parking->nom_parking}}</strong></td>
<td><strong>{{ $Parking->adresse}}</strong></td>
<td><strong>{{$Parking->nombre_place}}</strong></td>
<td><a class="btn btn-primary" href="{{ route('proprietaires.parking.show',$Parking->id)}}">Voir</a></td>
<td><a class="btn btn-warning" href="{{ route('proprietaires.parking.edit',$Parking->id)}}">Modifier</a></td>

<td>   
<form action="{{route('proprietaires.parking.destroy',$Parking->id) }}" method="POST"
onsubmit="return confirm('vouler vous vraiment suprimer ce parking?')">
@csrf
@method('DELETE')
<button
class="btn btn-danger" type="submit">Supprimer</button>
</form>
</td>
</tr>
@endforeach
                

                </tbody>
              </table>
              </div>
              <footer class="card-footer">
                 {{ $Parkings->links() }}
              </footer>
</body>
</html>

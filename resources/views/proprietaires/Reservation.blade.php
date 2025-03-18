<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
  <div class="container border rounded-5 shadow-lg m-5 p-5 ">
           @if(session()->has('info'))
                <div class="bg-danger border rounded-5 text-white m-3 p-3">{{ session('info') }}</div>
           @endif
           
           @if(session()->has('infos'))
                <div class="notification is-success">{{ session('infos') }}</div>
            @endif

    <header class="card-header">
      <h2 class="display-1 text-center mb-3 pb-3 fw-bold">Liste Des Reservations</h2>
        <a class="btn btn-info" href="{{ route('proprietaires.reservation.create') }}">ajouter une reservation</a>
    </header>
<table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">place occuper</th>
                    <th scope="col">immatriculation</th>
                    <th scope="col">solde</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($Reservations as $Reservation)
<tr>
<td>{{ $Reservation->id }}</td>
<td>{{ $Reservation->nom }}</td>
<td><strong>{{ $Reservation->place_occuper}}</strong></td>
<td><strong>{{ $Reservation->immatriculation}}</strong></td>
<td><strong>{{ $Reservation->solde}}</strong></td>
<td><a class="btn btn-primary" href="{{ route('proprietaires.reservation.show',$Reservation->id)}}">Voir</a></td>
<td><a class="btn btn-warning" href="{{ route('proprietaires.reservation.edit',$Reservation->id)}}">Modifier</a></td>

<td>   
<form action="{{route('proprietaires.reservation.destroy',$Reservation->id) }}" method="POST"
onsubmit="return confirm('vouler vous vraiment suprimer cet reservation?')">
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
                 {{ $Reservations->links() }}
              </footer>
</body>
</html>

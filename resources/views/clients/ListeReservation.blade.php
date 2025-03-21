@extends("templates.templateclients")

@section("titre")
   liste reservation
@endsection


@section("body")
  <div class="container border rounded-5 shadow-lg m-5 p-5 ">
           @if(session()->has('info'))
                <div class="bg-danger border rounded-5 text-white m-3 p-3">{{ session('info') }}</div>
           @endif
           
           @if(session()->has('infos'))
                <div class=" bg-success border rounded-5 text-white m-3 p-3"->{{ session('infos') }}</div>
            @endif

    <header class="card-header">
      <h2 class="display-1 text-center mb-3 pb-3 fw-bold">Liste De Reservation</h2>
    </header>
<table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col"> id parking</th>
                    <th scope="col">date debut</th>
                    <th scope="col">date fin</th>
                    <th scope="col">solde</th>
                    

                  </tr>
                </thead>
                <tbody>
                @foreach($reservations as $Reservation)
<tr>
<td><strong>{{ $Reservation->parking_id}}</strong></td>
<td><strong>{{ $Reservation->date_arriver}}</strong></td>
<td><strong>{{$Reservation->date_depart}}</strong></td>
<td><a class="btn btn-primary" href="{{ route('clients.reservation.show',$Reservation->id)}}">Voir</a></td>

<td>   
<form action="{{route('clients.reservation.destroy',$Reservation->id) }}" method="POST"
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
                 {{ $reservations->links() }}
              </footer>
 @endsection

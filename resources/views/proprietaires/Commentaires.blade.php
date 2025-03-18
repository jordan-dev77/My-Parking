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
           
    <header class="card-header">
      <h2 class="display-1 text-center mb-3 pb-3 fw-bold">Commentaires</h2>
    </header>
<table class="table">
                <thead>
                  <tr>
                    <th scope="col">noms</th>
                    <th scope="col">emails</th>
                    <th scope="col">message</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($Commentaires as $Commentaire)
<tr>
<td>{{ $Commentaire->nom }}</td>
<td><strong>{{$Commentaire->email}}</strong></td>
<td><strong>{{ $Commentaire->message}}</strong></td>
<td><a class="btn btn-primary" href="{{ route('proprietaires.commentaire.show',$Commentaire->id)}}">Voir</a></td>

<td>   
<form action="{{route('proprietaires.commentaire.destroy',$Commentaire->id) }}" method="POST"
onsubmit="return confirm('vouler vous vraiment suprimer ce commentaire ?')">
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
                 {{ $Commentaires->links() }}
              </footer>
</body>
</html>

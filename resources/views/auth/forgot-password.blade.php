<!doctype html>
<html lang="en">
  <head>
  	<title>renitialisation de mot de passe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/loginstyle.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/imagelogin.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
               <div class="mb-4 text-sm text-white">
               mot de passe oublie? pas de probleme inscriver juste votre adresse mail.
               </div>
            </div>
            <div class="mb-4 text-white">
                 {{session('status')}}
             </div>
            <form method="POST" action="{{ route('password.email') }}">
        @csrf

			
		      		<div class="form-group">
		      			<input type="email"name="email" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="email">
                          @error('email')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
		      		</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">envoyer le mail de renitialisation</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<!-- <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script> -->

	</body>
</html>



<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
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
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">connexion</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">avez vous un compte?</h3>
		      	<form method="POST" action="{{ route('login') }}">
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
	              <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="Password" >
	              <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                  @error('password')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">connecter</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked  name="remember">>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									@if (Route::has('password.request'))
									<a href="{{ route('password.request') }}" style="color: #fff">mot de passe oublier</a>
									@endif
								</div>
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


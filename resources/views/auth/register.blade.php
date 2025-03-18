<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/inscriptionstyle.css" rel="stylesheet" />
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Cree un compte</h2>

              <form method="POST" action="{{ route('register') }}">
              @csrf

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"  value="{{old('name')}}"/>
                  @error('name')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
                  <label class="form-label" for="form3Example1cg">Nom</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"  value="{{old('email')}}"/>
                  @error('email')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
                  <label class="form-label" for="form3Example3cg"> Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{old('password')}}" />
                  @error('password')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
                  <label class="form-label" for="form3Example4cg">Mot De Passe</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg"  name="password_confirmation" class="form-control form-control-lg @error('password') is-invalid @enderror"  value="{{old('password')}}"/>
                  @error('password_confirmation')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
                  <label class="form-label" for="form3Example4cdg">Confirmer Votre Mot De Passe </label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <select name="role" id="role" class="form-control  @error('role') is-invalid @enderror" value="{{old('role')}}">
                     <option value="client"> client </option>
                     <option value="proprietaire"> proprietaire </option>
                 <select>
                 <label class="form-label" for="role">choisisser votre role </label>
                         @error('role')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                          @enderror
                 
                </div>
<!-- 
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->

                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">aver vous deja un compte? <a href="{{ route('login') }}"
                    class="fw-bold text-body"><u>se connecter ici</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
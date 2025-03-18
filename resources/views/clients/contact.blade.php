@extends("templates.templateclients")
   
    @section("titre")
        contact
    @endsection

 @section("body")
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="" method="POST">
              @csrf
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{old('name')}}">
                          @error('name')
                          <div class="invalid-feedback">
                          {{$message}}
                          </div>
                          @enderror

                  </div>
                  <div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <!-- <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div class=""> -->
                    <input type="text" class="form-control @error('message') is-invalid @enderror "name="message" placeholder="Message" class="message_input" value="{{old('message')}}">
                      @error('message')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                  </div>
                  <div class="mt-5 d-flex justify-content-center ">
                    <button type="submit">
                      ENVOYER
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection

  
@extends("templates.templatevitrine")

@section("titre")
   fonctionalite
@endsection

@section("body")
  <!-- feature section -->
  <section class="feature_section layout_padding ">
    <div class="container p-5 m-5">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/money.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Money
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/clock.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Time
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/man.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Stress
              </h5>
              <p>
                It is a long established fact that a reader will be distracted by the readable content
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  @endsection
  
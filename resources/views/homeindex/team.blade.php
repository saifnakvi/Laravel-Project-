@section('content4')
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          @if(isset($Team))
          @foreach ($Team as $Index)
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('storage/'.$Index->image)}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>{{($Index->heading)}}</h5>
                <p>{{($Index->content)}}</p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
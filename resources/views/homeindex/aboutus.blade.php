@section('content2')
<!-- about section -->

 <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
        </p>
      </div>
      <div class="row">
        <div class="row">
          @if(@isset($Abus))
          @foreach ($Abus as $about)
          <div class="col-md-6 ">
            <div class="img-box">
              <img src="{{asset('storage/'.$about->image)}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <h3>{{$about->heading}}</h3>
              <p>{{$about->content}}</p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        @endforeach
        @endif
    </div>
  </section>
@endsection
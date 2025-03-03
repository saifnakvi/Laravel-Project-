@extends('layout.masterlayout')

@section('title')
    Services
@endsection

@section('content1')
<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Services</span>
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </p>
      </div>
      <div class="row">
        @if(isset($Serv))
        @foreach ($Serv as $service)
        <div class="col-md-4">
          <div class="box">
            <div class="img-box"> <img src="{{asset('storage/'.$service->image)}}" alt=""> </div>
            <div class="detail-box">
              <h5> {{($service->heading)}} </h5>
              <p>{{($service->content)}}</p>
              <a href="">
                Read More
              </a>
            </div>

          </div>
        </div>
        @endforeach
        @endif
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
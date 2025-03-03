@extends('layout.masterlayout')

@section('title')
    Why Choose Us
@endsection

@section('content3')
  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        @if(isset($whychose))
        @foreach ($whychose as $why)
        <div class="box">
          <div class="img-box">
            <img src="{{asset('storage/'.$why->image)}}" alt="">
          </div>
          <div class="detail-box">
            <h5>{{$why->heading}} </h5>
            <p>{{$why->content}}</p>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
@endsection
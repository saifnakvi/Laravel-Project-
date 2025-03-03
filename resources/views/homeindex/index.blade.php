@extends('layout.masterlayout')

@section('title')
    Home
@endsection

@section('content')
<!-- slider section -->
    <section class="slider_section bgimg">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @if(isset($slideImages))
          @foreach ($slideImages as $slider)
          <div class="carousel-item @if($loop->first) active @endif">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>{{($slider->heading)}} </h1>
                    <p> {{($slider->content)}} </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img class="first slide" src="{{asset('storage/'.$slider->image)}}" alt="First Slide">
                  </div>
                </div>
              </div>
            </div>
            <div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      <ol class="carousel-indicators">
        @foreach ($slideImages as $index => $slide)
        <li data-target="#customCarousel1" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
        @endforeach
      </ol> 
    </section>
<!-- end slider section -->

@include('homeindex.services')
@include('homeindex.aboutus')
@include('homeindex.why')
@include('homeindex.team')
@include('homeindex.client')
@endsection
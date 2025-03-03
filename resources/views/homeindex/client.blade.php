  <!-- client section -->
@section('content5')
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap">
        <div class="owl-carousel client_owl-carousel">
          @if(isset($client))
          @foreach ($client as $index)
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{asset('storage/'.$index->image)}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      {{($index->name)}}
                    </h6>
                    <p>
                      {{($index->designation)}}
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>{{($index->comment)}}</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection
  <!-- end client section -->
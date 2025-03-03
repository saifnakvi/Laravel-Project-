<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="finexo-html/images/favicon.png" type="">

  <title> @yield('title') </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="finexo-html/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="finexo-html/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="finexo-html/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="finexo-html/css/responsive.css" rel="stylesheet" />

</head>

<body>    
    
    <!-- slider section -->
    <section class="slider_section bgimg">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($slideImages as $slider )
          <div class="carousel-item active">
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
          </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class=""></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
      @endforeach
    </div>
    </section>
    <!-- end slider section -->
 

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
  
    <title>T2 LEGO Shop</title>
  
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  
    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
  
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/css/responsive.css" rel="stylesheet" />
  </head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="" href="/">
            <img src="/web-img/logo.png" alt="" height="80" width="80">
            <span>
              T2LEGOShop
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('about') }}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('products') }}"> Shop now </a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              @if (Session::has('loginID'))
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="">
                  <img src="/web-img/user.png" alt="">
                  <span>
                    {{ Session::get('loginID') }}
                  </span>
                </a>
                <a href="{{ url('signout') }}">
                  <span>
                    Logout
                  </span>
                </a>
              </div>
              @else
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="{{ url('signup') }}">
                  <img src="/web-img/user.png" alt="">
                  <span>
                    Sign Up
                  </span>
                </a>
                <a href="{{ url('signin') }}">
                  <img src="/web-img/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
              @endif
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>





  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        LEGO Marvel
      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel">
          @foreach ($dataMarvel as $row)
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="{{URL::asset('img/' . $row->prdImage1)}}" height="250" alt="">
              </div>
                <div class="text">
                  <h6>
                    {{ $row->prdName }}
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    {{ $row->prdPrice }}
                  </h6>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        LEGO Technic


      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel owl-2">
          @foreach ($dataTechnic as $row)
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  Buy Now
                </a>
              </div>
              <div class="img-box">
                <img src="{{URL::asset('img/' . $row->prdImage1)}}" height="250" alt="">
              </div>
                <div class="text">
                  <h6>
                    {{ $row->prdName }}
                  </h6>
                  <h6 class="price">
                    <span>
                      $
                    </span>
                    {{ $row->prdPrice }}
                  </h6>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="health_carousel-container">
        <h2 class="text-uppercase">
          LEGO Star Wars
  
  
        </h2>
        <div class="carousel-wrap layout_padding2">
          <div class="owl-carousel owl-2">
            @foreach ($dataStarwars as $row)
            <div class="item">
              <div class="box">
                <div class="btn_container">
                  <a href="">
                    Buy Now
                  </a>
                </div>
                <div class="img-box">
                  <img src="{{URL::asset('img/' . $row->prdImage1)}}" height="250" alt="">
                </div>
                  <div class="text">
                    <h6>
                      {{ $row->prdName }}
                    </h6>
                    <h6 class="price">
                      <span>
                        $
                      </span>
                      {{ $row->prdPrice }}
                    </h6>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    <!--<div class="d-flex justify-content-center">
      <a href="">
        See more
      </a>
    </div>-->
  </section>

  <!-- end health section -->



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="/web-img/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +84 945493370
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="/web-img/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  quanltgcs210517@fpt.edu.vn
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('products') }}"> Shop now </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
    <p>Edited by PhongPNGGCC200002 & QuanLTGCS210517</p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>
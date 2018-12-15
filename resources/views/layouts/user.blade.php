<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{asset ('assets/frontend/img/FB_IMG_15361098794607620.png') }}" type="image/png">
  <title>AS LEATHER SHOPPERS</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset ('assets/frontend/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/lightbox/simpleLightbox.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/nice-select/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/animate-css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}">
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset ('assets/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets/frontend/css/responsive.css') }}">
</head>

<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu row m0">
      <div class="container-fluid">
        <div class="float-left">
          <p>Call Us: 012 44 5698 7456 896</p>
        </div>
        <div class="float-right">
          <ul class="right_side">
            <li>
              <a href="/login">
                Login/Register
              </a>
            </li>
            <li>
              <a href="/contact">
                Contact Us
              </a>
            </li>
            <li>
  <form action="{{route("logout")}}" method="POST">
      @csrf
  <button class="dropdown-item"style="cursor:pointer">Sign Out</button>
        </form>
      </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="{{ asset ('assets/frontend/img/FB_IMG_15361098794607620.png') }}" height="75" width="75" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/category">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <hr>
                  <li class="nav-item">
                    <a href="/carts" class="icons">
                      &nbsp
                      <i class="lnr lnr lnr-cart"></i>
                    </a>
                  </li>

                  <hr>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->

  @yield('content')

  <!--================ start footer Area  =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6 class="footer_title">About Us</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget f_social_wd">
            <h6 class="footer_title">Follow Us</h6>
            <p>Let us be social</p>
            <div class="f_social">
              <a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/as_leather_accessories/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba0a856c9abba579677a549/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
  <!--================ End footer Area  =================-->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset ('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/popper.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/stellar.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/lightbox/simpleLightbox.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/isotope/isotope-min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/flipclock/timer.js') }}"></script>
  <script src="{{ asset ('assets/frontend/vendors/counter-up/jquery.counterup.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/mail-script.js') }}"></script>
  <script src="{{ asset ('assets/frontend/js/theme.js') }}"></script>
</body>

</html>
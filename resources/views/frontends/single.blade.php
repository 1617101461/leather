<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AS LEATHER</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset ('assets/frontend/images/Money.png') }}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset ('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset ('assets/frontend/vendors/animate/animate.css') }}" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/camera-slider/camera.css') }}">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/frontend/vendors/owl_carousel/owl.carousel.css') }}" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/frontend/css/style.css') }}" media="all" />

    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/frontend/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Top Header_Area -->
     <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+085721055509</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>asleatherofficial@gmail.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/as_leather_accessories/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <br>
                    <img src="{{ asset ('assets/frontend/images/FB_IMG_15361098794607620.png') }}" width="70" height="70" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <div class="top_bar_login ml-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/produk">Produk</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/testimoni">Testimoni</a></li>
                        <li><a href="/contact">Kontak</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Blog</h2>
        <ol class="breadcrumb">
            <li><a href="/index">Home</a></li>
            <li><a href="/blog" class="active">Blog</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

<!-- blog-2 area -->

<section class="latest_blog_area">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="{{ asset ('assets/img/artikel/' .$artikels->gambar. '' ) }}" style="margin-top: 50px; max-width: 75%;height: auto;" alt="">
                    <br>
                    <br>
                        <h3>
                            {{ $artikels->judul }}
                        </h3>
                        <br>
                    <div class="content-wrap">
                        <p>
                            {!! $artikels->deskripsi !!}
                        </p>

                    </div>
                </div>
            </div>
            {{--  view composer  --}}
            @include('frontends.side')
            {{--  end view composer  --}}
        </div>
        <br>
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://as-leather-3.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
</section>

    <!-- End Our Latest Blog Area -->

    <!-- End Our Latest Blog Area -->

    <!-- End blog-2 area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>AS LEATHER</h2>
                    <p>Dompet yang terbuat dari kulit memiliki kelebihan di banding dompet yang terbuat dari bahan lain. biasanya kalo dompet kulit di simpan disaku celana belakang tidak mudah terjatuh, karena dompet kulit selalu mengikuti bentuk dari celana itu sendiri.</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/as_leather_accessories/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    
                    <ul class="quick_link">
                        <li><a href="/index"><i class="fa fa-chevron-right"></i>Home</a></li>
                        <li><a href="/produk"><i class="fa fa-chevron-right"></i>Produk</a></li>
                        <li><a href="/galeri"><i class="fa fa-chevron-right"></i>Galeri</a></li>
                        <li><a href="/blog"><i class="fa fa-chevron-right"></i>Blog</a></li>
                        <li><a href="/testimoni"><i class="fa fa-chevron-right"></i>Testimoni</a></li>
                        <li><a href="/contact"><i class="fa fa-chevron-right"></i>Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Dompet</h2>
                    <p>Dompet adalah tas kecil yang berfungsi untuk menyimpan uang kertas atau identitas seperti, KTP, kartu ATM, SIM, foto pacar atau orang yang kita sayangi dan lain-lain.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>asleatherofficial@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+085721055509</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Jln.Cibaduyut Dalam 1 No.33</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by <a href="https://colorlib.com">AS LEATHER.</a>
        </div>
    </footer>
    <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- Animate JS -->
    <script src="{{ asset('assets/frontend/vendors/animate/wow.min.js') }}"></script>
    <!-- Camera Slider -->
    <script src="{{ asset('assets/frontend/vendors/camera-slider/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/camera-slider/camera.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Progress JS -->
    <script src="{{ asset('assets/frontend/vendors/Counter-Up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/Counter-Up/waypoints.min.js') }}"></script>
    <!-- Owlcarousel JS -->
    <script src="{{ asset('assets/frontend/vendors/owl_carousel/owl.carousel.min.js') }}"></script>
    <!-- Stellar JS -->
    <script src="{{ asset('assets/frontend/vendors/stellar/jquery.stellar.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/frontend/js/theme.js') }}"></script>
</body>
</html>

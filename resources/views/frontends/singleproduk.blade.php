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
                        <li><a href="/index">Beranda</a></li>
                        <li><a href="/produk">Produk</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/blog">Artikel</a></li>
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
        <h2>Produk</h2>
        <ol class="breadcrumb">
            <li><a href="/index">Beranda</a></li>
            <li><a href="/produk" class="active">Produk</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

<!-- blog-2 area -->
<br>
<br>
<br>
<br>
<style type="text/css">
    * {margin: 0;padding:0}
body {background: #FFF}
h1 {color: #aaa;margin: 10px}
.carousel-container {
  padding: 0;
  margin: 1em auto;
  display: inline-block;
  max-width: 100%;
  width: 400px;
  height: 300px;
  position: relative;
  list-style-type: none;
}
.carousel-container .carousel-content {
  height: 300px;
  overflow: hidden;
  background: rgba(0,0,0,0.9);
  position: absolute;
  top: 0;
  box-shadow: 0 5px 5px -5px #333;
  padding: 0;
  text-align: center;
  line-height: 296px;
}
.carousel-container .carousel-content img {
  opacity: 0;
  padding: 0;
  width: auto;
  height: auto;
  max-height: 300px;
  max-width: 400px;
  vertical-align: middle;
  -webkit-animation-name: ziim;
  -webkit-animation-duration: 0.6s;
  animation-name: ziim;
  animation-duration: 0.6s;
}
@-webkit-keyframes ziim {
  from {-webkit-transform:scale(1)} 
  to {-webkit-transform:scale(0)}
}
@keyframes ziim {
  from {transform:scale(1)} 
  to {transform:scale(0)}
}
.carousel-container .carousel-toggle:checked ~ .carousel-content,.carousel-container .carousel-toggle.active ~ .carousel-content {
  height: 100%;
  width: 100%;
}
.carousel-container .carousel-toggle:checked ~ .carousel-content img,.carousel-container .carousel-toggle.active ~ .carousel-content img {
  opacity: 1;
}
.carousel-fullscreen {
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 0 4px 4px 0;
  width: 27px;
  height: 27px;
  cursor: pointer;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAA/SURBVHjaYvjPQA5kGCHaUEApQylDKZrY4NEG5UG1YZUbetpKCcJBoG04R8DQyAGjJRfDf4b/DAAAAAD//wMAswEnryWu8FcAAAAASUVORK5CYII=') no-repeat center center;
}
.carouselFullScreen:checked,.carouselFullScreen.active {
  display: block;
  height: 100%;
}
.carouselFullScreen:checked+.carousel-container,.carouselFullScreen.active+.carousel-container {
  margin: 0;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;  
}
.carouselFullScreen:checked+.carousel-container .carousel-toggle:checked ~.carousel-content >li,.carouselFullScreen.active+.carousel-container .carousel-toggle:checked ~.carousel-content >li {
  height: 100%;
  line-height: 99vh;
}
.carouselFullScreen:checked+.carousel-container .carousel-fullscreen,.carouselFullScreen.active+.carousel-container .carousel-fullscreen {
  width: 54px;
  height: 54px;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAQAAAAmTKJWAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD+SURBVHja7Jc9CoQwEIW9gkdJYyFoIeiFvIaH0VLB0sLGI3iE1DbhbRciGDJrltnFHV+Zpx9I3vwkSPiUCExgAvsH2A7tUY/Sukr0Xt9Ohx3wPQtq66qxeH0HHWa8H1nRWFeD1eszdJiOhulPwKi/8RZMY8PsqIOyLoXudLad3rsB29CicqSQWlcKdTprscXBJuTkHOWY4mAjMjIswxgHm1GRYRXmn4eZy1yF5ObO3ClXbq5CcnP3RrkaLnMVkpu7gQ4rLnMVkpu7Qprnk2GsF4T16rOGmrVcPbfqf6l5so4FrAMP6yjHOqQyjN+siwXrysS6DEqnFpjABEbRawACMWGE7CJdswAAAABJRU5ErkJggg==') no-repeat center center;
}
.carouselFullScreen:checked+.carousel-container img,.carouselFullScreen.active+.carousel-container img {
  width: auto;
  height: 100%;
  max-height: 100vh;
  max-width: 100vw;
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
input[type=checkbox].carouselFullScreen,input[type=checkbox].carousel-toggle {
  visibility: hidden;  
}
</style>

<section class="latest_blog_area">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                <input id="satu" type="checkbox" class="carouselFullScreen" />
                    <ul class="carousel-container">
                        <li>
                            <input type="checkbox" checked="checked" class="carousel-toggle" />
                            <ul class="carousel-content">
                                <label for="satu" class="carousel-fullscreen"></label>
                                <li><img src="{{ asset ('assets/img/barang/' .$barangs->gambar. '' ) }}" /></li>
                            </ul>
                        </li>
                </ul>
                    <br>
                    <br>
                        <h2>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ $barangs->nama_barang }}
                        </h2>
                        <br>
                    <div class="content-wrap">
                        <p>
                            {!! $barangs->deskripsi !!}
                        </p>
                        <br>
                        <p>
                            <h4><i class="fa fa-heart" aria-hidden="true"></i>&nbsp Rp.{{ $barangs->harga }}</h4>
                        </p>

                    </div>
                </div>
            </div>
            {{--  view composer  --}}
            @include('frontends.sideproduk')
            {{--  end view composer  --}}
        </div>
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
                    <h2>Tautan</h2>
                    
                    <ul class="quick_link">
                        <li><a href="/index"><i class="fa fa-chevron-right"></i>Beranda</a></li>
                        <li><a href="/produk"><i class="fa fa-chevron-right"></i>Produk</a></li>
                        <li><a href="/galeri"><i class="fa fa-chevron-right"></i>Galeri</a></li>
                        <li><a href="/blog"><i class="fa fa-chevron-right"></i>Artikel</a></li>
                        <li><a href="/testimoni"><i class="fa fa-chevron-right"></i>Testimoni</a></li>
                        <li><a href="/contact"><i class="fa fa-chevron-right"></i>Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Dompet</h2>
                    <p>Dompet adalah tas kecil yang berfungsi untuk menyimpan uang kertas atau identitas seperti, KTP, kartu ATM, SIM, foto pacar atau orang yang kita sayangi dan lain-lain.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Kontak</h2>
                    <address>
                        <p>Punya pertanyaan, komentar atau hanya ingin menyapa:</p>
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
            Copyright 2017 All rights reserved. Designed by AS LEATHER.</a>
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

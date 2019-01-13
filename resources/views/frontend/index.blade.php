@extends('layouts.user')
@section('content')
<aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url(assets/frontend/images/img_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <br>
                      <h1 class="head-1">Dompet</h1>
                      <h2 class="head-2">Collection</h2>
                      <p><a href="/shop" class="btn btn-primary">Shop Collection</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(assets/frontend/images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <br>
                      <h1 class="head-1">Tas</h1>
                      <h2 class="head-2">Collection</h2>
                      <p><a href="/shop" class="btn btn-primary">Shop Collection</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(assets/frontend/images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <br>
                      <h1 class="head-1">New</h1>
                      <h2 class="head-2">Arrival</h2>
                      <p><a href="/shop" class="btn btn-primary">Shop Collection</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          </ul>
        </div>
    </aside>

@php
$barangs = App\barangs::orderBy('created_at','DESC')->paginate(4);
@endphp

    <div class="colorlib-shop">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
            <h2><span>New Arrival</span></h2>
            <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
           @foreach($barangs as $data)
          <div class="col-md-3 text-center">
            <div class="product-entry">
              <div class="product-img" style="background-image: url({{ asset ('assets/img/barang/' .$data->gambar. '' ) }});">
                <p class="tag"><span class="new">New</span></p>
                <div class="cart">
                  <p>
                    <span class="addtocart"><a href="/carts"><i class="icon-shopping-cart"></i></a></span> 
                    <span><a href="/produks/show/{{$data->slug}}"><i class="icon-eye"></i></a></span>
                  </p>
                </div>
              </div>
              <div class="desc">
                <h3><a href="shop.html">{{$data->nama_barang}}</a></h3>
                <p class="price"><span>${{$data->harga}}</span></p>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </div>
    <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(assets/frontend/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="intro-desc">
              <div class="text-salebox">
                <div class="text-lefts">
                  <div class="sale-box">
                    <div class="sale-box-top">
                      <h2 class="number">45</h2>
                      <span class="sup-1">%</span>
                      <span class="sup-2">Off</span>
                    </div>
                    <h2 class="text-sale">Sale</h2>
                  </div>
                </div>
                <div class="text-rights">
                  <h3 class="title">Just hurry up limited offer!</h3>
                  <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p><a href="shop.html" class="btn btn-primary">Shop Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@php
$barangs = App\barangs::orderBy('created_at','DESC')->paginate(8);
@endphp
    <div class="colorlib-shop">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
            <h2><span>Our Products</span></h2>
            <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          @foreach($barangs as $data)
          <div class="col-md-3 text-center">
            <div class="product-entry">
              <div class="product-img" style="background-image: url( {{ asset ('assets/img/barang/' .$data->gambar. '' ) }} );">
                <p class="tag"><span class="sale">Sale</span></p>
                <div class="cart">
                  <p>
                    <span class="addtocart"><a href="/carts"><i class="icon-shopping-cart"></i></a></span> 
                    <span><a href="/produks/show/{{$data->slug}}"><i class="icon-eye"></i></a></span> 
                  </p>
                </div>
              </div>
              <div class="desc">
                <h3><a href="shop.html">{{$data->nama_barang}}</a></h3>
                <p class="price"><span>${{$data->harga}}</span></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div id="colorlib-testimony" class="colorlib-light-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
            <h2><span>Our Satisfied Customer says</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">            
            <div class="owl-carousel2">
              <div class="item">
                <div class="testimony text-center">
                  <span class="img-user" style="background-image: url(assets/frontend/images/person1.jpg);"></span>
                  <span class="user">Alysha Myers</span>
                  <small>Miami Florida, USA</small>
                  <blockquote>
                    <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  </blockquote>
                </div>
              </div>
              <div class="item">
                <div class="testimony text-center">
                  <span class="img-user" style="background-image: url(assets/frontend/images/person2.jpg);"></span>
                  <span class="user">James Fisher</span>
                  <small>New York, USA</small>
                  <blockquote>
                    <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </blockquote>
                </div>
              </div>
              <div class="item">
                <div class="testimony text-center">
                  <span class="img-user" style="background-image: url(assets/frontend/images/person3.jpg);"></span>
                  <span class="user">Jacob Webb</span>
                  <small>Athens, Greece</small>
                  <blockquote>
                    <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
@php
$artikels = App\artikels::orderBy('created_at','DESC')->paginate(3);
@endphp
    <div class="colorlib-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
            <h2>Recent Blog</h2>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
          </div>
        </div>
        <div class="row">
          @foreach($artikels as $data)
          <div class="col-md-4">
            <article class="article-entry">
              <a href="blog.html" class="blog-img" style="background-image: url( {{ asset ('assets/img/artikel/' .$data->gambar. '' ) }} );"></a>
              <div class="desc">
                <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                <p class="admin"><span>Posted by:</span> <span>{{$data->users->name}}</span></p>
                <h2><a href="blog.html">{{$data->judul}}</a></h2>
                <p>{!! str_limit ($data->deskripsi,120) !!}...</p>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <div id="colorlib-subscribe">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="col-md-6 text-center">
              <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
            </div>
            <div class="col-md-6">
              <form class="form-inline qbstp-header-subscribe">
                <div class="row">
                  <div class="col-md-12 col-md-offset-0">
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" placeholder="Enter your email">
                      <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
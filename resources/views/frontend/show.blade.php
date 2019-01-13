@extends('layouts.user')
@section('content')
<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset ('assets/frontend/images/cover-img-1.jpg') }});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="/shop">Product</a></span> <span>Product Detail</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url({{ asset ('assets/img/barang/' .$barangs->gambar. '' ) }});">
											<p class="tag"><span class="sale">Sale</span></p>
										</div>
										<div class="thumb-nail">
											<a href="#" class="thumb-img" style="background-image: url(images/item-11.jpg);"></a>
											<a href="#" class="thumb-img" style="background-image: url(images/item-12.jpg);"></a>
											<a href="#" class="thumb-img" style="background-image: url(images/item-16.jpg);"></a>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="desc">
										<h3>{{$barangs->nama_barang}}</h3>
										<p class="price">
											<span>${{$barangs->harga}}</span> 
											<span class="rate text-right">
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-half"></i>
												(74 Rating)
											</span>
										</p>
										<div class="color-wrap">
											<p class="color-desc">
												Color: 
												<a href="#" class="color color-1"></a>
												<a href="#" class="color color-2"></a>
												<a href="#" class="color color-3"></a>
												<a href="#" class="color color-4"></a>
												<a href="#" class="color color-5"></a>
											</p>
										</div>
										<div class="size-wrap">
											<p class="size-desc">
												Size: 
												<a href="#" class="size size-1">xs</a>
												<a href="#" class="size size-2">s</a>
												<a href="#" class="size size-3">m</a>
												<a href="#" class="size size-4">l</a>
												<a href="#" class="size size-5">xl</a>
												<a href="#" class="size size-5">xxl</a>
											</p>
										</div>
										<div class="row row-pb-sm">
											<div class="col-md-4">
                                    <div class="input-group">
                                    	<span class="input-group-btn">
                                       	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                          <i class="icon-minus2"></i>
                                       	</button>
                                   		</span>
                                    	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                    	<span class="input-group-btn">
                                       	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                            <i class="icon-plus2"></i>
                                        </button>
                                    	</span>
                                 	</div>
                        			</div>
										</div>
										<p><a href="/carts" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										<p>{!! $barangs->deskripsi !!}</p>
						         </div>
					         </div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@php
$barangs = App\barangs::orderBy('created_at','DESC')->paginate(4);
@endphp
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Similar Products</span></h2>
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
                <h3><a href="/produks/show/{{$data->slug}}">{{$data->nama_barang}}</a></h3>
                <p class="price"><span>${{$data->harga}}</span></p>
              </div>
            </div>
          </div>
            @endforeach
        </div>
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
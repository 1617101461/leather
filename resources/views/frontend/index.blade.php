	@extends('layouts.user')
@section('content')
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Fashion for
							<br />Upcoming Winter</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->

	<!--================End Hot Deals Area =================-->

	<!--================Clients Logo Area =================-->
	<br>
	<br>
	<br>
	<section class="clients_logo_area">
		<div class="container-fluid">
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="{{ asset ('assets/frontend/img/clients-logo/c-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset ('assets/frontend/img/clients-logo/c-logo-2.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset ('assets/frontend/img/clients-logo/c-logo-3.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset ('assets/frontend/img/clients-logo/c-logo-4.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset ('assets/frontend/img/clients-logo/c-logo-5.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================End Clients Logo Area =================-->

	<!--================Feature Product Area =================-->
@php
$barangs = App\barangs::all();
@endphp	
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Featured Products</h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
				<div class="row">
            			@foreach($barangs as $data)
					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" alt="">
							</div>
							<a href="/produks/show/{{$data->slug}}">
								<h4>{{$data->nama_barang}}</h4>
							</a>
							<h5>${{$data->harga}}</h5>
							<div class="p_icon">
									<a href="#">
										<i class="lnr lnr-heart"></i>
									</a>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<a href="/carts">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->


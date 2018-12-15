@extends('layouts.user')
@section('content')

	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Shop Page</h2>
					<div class="page_link">
						<a href="/">Home</a>
						<a href="/category">Shop</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Category Product Area =================-->
	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">

					<div class="latest_product_inner row">
			            @foreach($barangs as $data)
						<div class="col-lg-3 col-md-3 col-sm-6" data-filter="painting{{$data->kategoris->id}}">
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
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<a href="/carts">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-3">
					<div class="left_sidebar_area" data-filter="*">
						<aside class="left_widgets p_filter_widgets" data-filter=".painting{{$data->id}}">
							<div class="l_w_title">
								<h3>Product Filters</h3>
							</div>
							<div class="widgets_inner">
								<h4>Product</h4>
								<ul class="list">
									<li>
										<a href="/category">All</a>
									</li>
									@foreach($kategoris as $data)
									<li>
										<a href="{{url('/category',$data->id)}}">{{$data->nama_kategori}}</a>
									</li>
									@endforeach
									<li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<br>
			<br>
		</div>
	</section>
	<!--================End Category Product Area =================-->

	
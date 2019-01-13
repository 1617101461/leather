@extends('layouts.user')
@section('content')
<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(assets/frontend/images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Checkout</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="cart.html">Shopping Cart</a></span> <span>Checkout</span></h2>
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
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form method="post" class="colorlib-form">
							<h2>Billing Details</h2>
		              	<div class="row">
			               
			               <div class="form-group">
									<form action="{{ route('checkout.store') }}" method="post"  enctype="multipart/form-data">
						{{ csrf_field() }}

			<div class="form-group {{$errors->has('first_name') ? 'has-error' : '' }}">
				<label class="control-label">First Name</label>
				<input type="text"  name="first_name" class="form-control" required>
				@if ($errors->has('first_name'))
				<span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
				@endif
			</div>
			
			<div class="form-group {{$errors->has('last_name') ? 'has-error' : '' }}">
				<label class="control-label">Last Name</label>
				<input type="text"  name="last_name" class="form-control" required>
				@if ($errors->has('last_name'))
				<span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
				@endif
			</div>
			
			<div class="form-group {{$errors->has('company_name') ? 'has-error' : '' }}">
				<label class="control-label">Company Name</label>
				<input type="text"  name="company_name" class="form-control" required>
				@if ($errors->has('company_name'))
				<span class="help-block"><strong>{{ $errors->first('company_name') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('phone_number') ? 'has-error' : '' }}">
				<label class="control-label">Phone Number</label>
				<input type="text"  name="phone_number" class="form-control" required>
				@if ($errors->has('phone_number'))
				<span class="help-block"><strong>{{ $errors->first('phone_number') }}</strong></span>
				@endif
			</div>
				
			<div class="form-group {{$errors->has('email_address') ? 'has-error' : '' }}">
				<label class="control-label">Email Address</label>
				<input type="text"  name="email_address" class="form-control" required>
				@if ($errors->has('email_address'))
				<span class="help-block"><strong>{{ $errors->first('email_address') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('country') ? 'has-error' : '' }}">
				<label class="control-label">Country</label>
				<input type="text"  name="country" class="form-control" required>
				@if ($errors->has('country'))
				<span class="help-block"><strong>{{ $errors->first('country') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('address') ? 'has-error' : '' }}">
				<label class="control-label">Address</label>
				<input type="text"  name="address" class="form-control" required>
				@if ($errors->has('address'))
				<span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('town') ? 'has-error' : '' }}">
				<label class="control-label">Town/City</label>
				<input type="text"  name="town" class="form-control" required>
				@if ($errors->has('town'))
				<span class="help-block"><strong>{{ $errors->first('town') }}</strong></span>
				@endif
			</div>


			<div class="form-group {{$errors->has('district') ? 'has-error' : '' }}">
				<label class="control-label">District</label>
				<input type="text"  name="district" class="form-control" required>
				@if ($errors->has('district'))
				<span class="help-block"><strong>{{ $errors->first('district') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('post_code') ? 'has-error' : '' }}">
				<label class="control-label">Post Code</label>
				<input type="text"  name="post_code" class="form-control" required>
				@if ($errors->has('post_code'))
				<span class="help-block"><strong>{{ $errors->first('post_code') }}</strong></span>
				@endif
			</div>
			</div>
			<div class="from-group">
				<button type="submit" class="btn btn-primary" href="/confirmation">Tambah</button>
			</div>
		</div>
	</form>
</div>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>$100.00</span>
									<ul>
										<li><span>1 x Product Name</span> <span>$99.00</span></li>
										<li><span>1 x Product Name</span> <span>$78.00</span></li>
									</ul>
								</li>
								<li><span>Shipping</span> <span>$0.00</span></li>
								<li><span>Order Total</span> <span>$180.00</span></li>
							</ul>
						</div>
						<div class="cart-detail">
							<h2>Payment Method</h2>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Direct Bank Tranfer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Check Payment</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Paypal</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
									   <label><input type="checkbox" value="">I have read and accept the terms and conditions</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p><a href="#" class="btn btn-primary">Place an order</a></p>
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
						<h2><span>Recommended Products</span></h2>
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
										<span><a href="/produks/show/{{$data->slug}}"><i class="icon-eye"></i></a></span></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="/shop">{{$data->nama_barang}}</a></h3>
								<p class="price"><span>${{$data->harga}}</span></p>
							</div>
						</div>
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
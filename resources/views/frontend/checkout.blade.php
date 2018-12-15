@extends('layouts.user')
@section('content')

<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Product Checkout</h2>
					<div class="page_link">
						<a href="/">Home</a>
						<a href="/checkout">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="returning_customer">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
						<h3>Billing Details</h3>
					<form action="{{ route('checkout.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<div class="form-group {{$errors->has('nama_depan') ? 'has-error' : '' }}">
				<label class="control-label">Nama Depan</label>
				<input type="text"  name="nama_depan" class="form-control" required>
				@if ($errors->has('nama_depan'))
				<span class="help-block"><strong>{{ $errors->first('nama_depan') }}</strong></span>
				@endif
			</div>

			
			<div class="form-group {{$errors->has('nama_belakang') ? 'has-error' : '' }}">
				<label class="control-label">Nama Belakang</label>
				<input type="text"  name="nama_belakang" class="form-control" required>
				@if ($errors->has('nama_belakang'))
				<span class="help-block"><strong>{{ $errors->first('nama_belakang') }}</strong></span>
				@endif
			</div>
			
			<div class="form-group {{$errors->has('telephone') ? 'has-error' : '' }}">
				<label class="control-label">Telephone</label>
				<input type="text"  name="telephone" class="form-control" required>
				@if ($errors->has('telephone'))
				<span class="help-block"><strong>{{ $errors->first('telephone') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
				<label class="control-label">Email</label>
				<input type="text"  name="email" class="form-control" required>
				@if ($errors->has('email'))
				<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
				@endif
			</div>
				
			<div class="form-group {{$errors->has('alamat_satu') ? 'has-error' : '' }}">
				<label class="control-label">Alamat Satu</label>
				<input type="text"  name="alamat_satu" class="form-control" required>
				@if ($errors->has('alamat_satu'))
				<span class="help-block"><strong>{{ $errors->first('alamat_satu') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('alamat_dua') ? 'has-error' : '' }}">
				<label class="control-label">Alamat Dua</label>
				<input type="text"  name="alamat_dua" class="form-control" required>
				@if ($errors->has('alamat_dua'))
				<span class="help-block"><strong>{{ $errors->first('alamat_dua') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('negara') ? 'has-error' : '' }}">
				<label class="control-label">Negara</label>
				<input type="text"  name="negara" class="form-control" required>
				@if ($errors->has('negara'))
				<span class="help-block"><strong>{{ $errors->first('negara') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('kota') ? 'has-error' : '' }}">
				<label class="control-label">Kota</label>
				<input type="text"  name="kota" class="form-control" required>
				@if ($errors->has('kota'))
				<span class="help-block"><strong>{{ $errors->first('kota') }}</strong></span>
				@endif
			</div>


			<div class="form-group {{$errors->has('daerah') ? 'has-error' : '' }}">
				<label class="control-label">Daerah</label>
				<input type="text"  name="daerah" class="form-control" required>
				@if ($errors->has('daerah'))
				<span class="help-block"><strong>{{ $errors->first('daerah') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('kode_pos') ? 'has-error' : '' }}">
				<label class="control-label">Kode Pos</label>
				<input type="text"  name="kode_pos" class="form-control" required>
				@if ($errors->has('kode_pos'))
				<span class="help-block"><strong>{{ $errors->first('kode_pos') }}</strong></span>
				@endif
			</div>

			<div class="from-group">
				<button type="submit" class="btn btn-primary" href="/confirmation">Tambah</button>
			</div>

		</form>
					</div>
					<div class="col-lg-4">
						<div class="order_box">
							<h2>Your Order</h2>
							<ul class="list">
								<li>
									<a href="#">Product
										<span>Total</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Blackberry
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Tomatoes
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Brocoli
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
							</ul>
							<ul class="list list_2">
								<li>
									<a href="#">Subtotal
										<span>$2160.00</span>
									</a>
								</li>
								<li>
									<a href="#">Shipping
										<span>Flat rate: $50.00</span>
									</a>
								</li>
								<li>
									<a href="#">Total
										<span>$2210.00</span>
									</a>
								</li>
							</ul>
							<div class="payment_item">
								<div class="radion_btn">
									<input type="radio" id="f-option5" name="selector">
									<label for="f-option5">Check payments</label>
									<div class="check"></div>
								</div>
								<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
							</div>
							<div class="payment_item active">
								<div class="radion_btn">
									<input type="radio" id="f-option6" name="selector">
									<label for="f-option6">Paypal </label>
									<img src="img/product/single-product/card.jpg" alt="">
									<div class="check"></div>
								</div>
								<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
							</div>
							<div class="creat_account">
								<input type="checkbox" id="f-option4" name="selector">
								<label for="f-option4">I’ve read and accept the </label>
								<a href="#">terms & conditions*</a>
							</div>
							<a class="main_btn" href="#">Proceed to Paypal</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->

	
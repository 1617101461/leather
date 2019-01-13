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
				   					<h1>Products</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span>Shop</span></h2>
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
				<div class="row">
					<div class="col-md-10 col-md-push-2">
						<div class="row row-pb-lg">
							@foreach($barangs as $data)
							<div class="col-md-4 text-center painting{{$data->kategoris->id}}">
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
					<div class="col-md-2 col-md-pull-10">
						<div class="sidebar">
							<div class="side">
								<h2>Categories</h2>
								<div class="fancy-collapse-panel">
			                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" >
			                     <div class="panel panel-default">
			                         <div class="panel-heading" role="tab" id="headingOne" >
			                             <h4 class="panel-title">
			                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories
			                                 </a>
			                             </h4>
			                         </div>
			                         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                             <div class="panel-body">
			                                 <ul>
			                                 	<li data-filter="*""><a href="/shop">All</a></li>
												@foreach($kategoris as $data)
			                                 	<li data-filter=".painting{{$data->id}}"><a href="{{url('/shop',$data->id)}}">{{$data->nama_kategori}}</a></li>
			                                 	@endforeach
			                                 </ul>
			                             </div>
			                         </div>
			                     </div>
			                  </div>
			               </div>
						</div>

							<div class="side">
								<h2>Price Range</h2>
								<form method="post" class="colorlib-form-2">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Price from:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">200</option>
				                        <option value="#">300</option>
				                        <option value="#">400</option>
				                        <option value="#">1000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Price to:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">2000</option>
				                        <option value="#">4000</option>
				                        <option value="#">6000</option>
				                        <option value="#">8000</option>
				                        <option value="#">10000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </form>
							</div>
							<div class="side">
								<h2>Color</h2>
								<div class="color-wrap">
									<p class="color-desc">
										<a href="#" class="color color-1"></a>
										<a href="#" class="color color-2"></a>
										<a href="#" class="color color-3"></a>
										<a href="#" class="color color-4"></a>
										<a href="#" class="color color-5"></a>
									</p>
								</div>
							</div>
							<div class="side">
								<h2>Size</h2>
								<div class="size-wrap">
									<p class="size-desc">
										<a href="#" class="size size-1">xs</a>
										<a href="#" class="size size-2">s</a>
										<a href="#" class="size size-3">m</a>
										<a href="#" class="size size-4">l</a>
										<a href="#" class="size size-5">xl</a>
										<a href="#" class="size size-5">xxl</a>
									</p>
								</div>
							</div>
						</div>
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
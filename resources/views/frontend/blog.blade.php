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
				   					<h1>Our Blog</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span>Blog</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

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
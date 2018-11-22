<div class="col-lg-4 sidebar" style="margin-top: 45px;">
<div class="single-widget recent-posts-widget">
        <h3 class="title">Recent Posts</h3>
        <br>
        <div class="blog-list ">
            @foreach($recent as $data)
            <div class="single-recent-post d-flex flex-row">
                <div class="recent-thumb">
                    <img class="img-fluid" src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" style="margin-top: 10px; max-width: 150px; max-height: 150px;" alt="">
                </div>
                <div class="recent-details">
                    <a href="/produks/singleproduk/{{ $data->slug }}">
                        <br>
                        <h4>
                            {{ $data->nama_barang }}
                        </h4>
                    </a>
                    <p>
                        {{ $data->created_at->diffForHumans() }}
                    </p>
                    <p>
                            <i class="fa fa-heart" aria-hidden="true"></i>&nbsp Rp.{{ $data->harga }}</a>
                        </p>
                        <br>
                </div>
            </div>  
            @endforeach                                                                            
        </div>                              
    </div>
</div>
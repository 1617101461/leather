@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Cart
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}"><button type="submit" class="btn btn-primary">Kembali</button></a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('cart.update',$carts->id) }}" method="post"  enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

        			<div class="form-group {{ $errors->has('id_barangs') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama barang</label>	
			  			<select name="id_barangs" class="form-control">
			  				@foreach($barangs as $data)
			  				<option value="{{ $data->id }}" {{ $selectedbarang == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_barang }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barangs'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barangs') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah</label>	
			  			<input type="text" name="jumlah" class="form-control" value="{{ $carts->jumlah }}"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_users') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama User</label>	
			  			<select name="id_users" class="form-control">
			  				@foreach($users as $data)
			  				<option value="{{ $data->id }}" {{ $selecteduser == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_user }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_users'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_users') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
  };
  CKEDITOR.replace( 'text',options);
</script>

</div>
@endsection
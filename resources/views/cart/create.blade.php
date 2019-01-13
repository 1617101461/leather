@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header"><b>Tambah cart </b>
		<a href="{{ url()->previous() }}"><button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
	<div class="card-body">
		<form action="{{ route('cart.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<div class="form-group {{ $errors->has('id_barangs') ? ' has-error' : '' }}">
	  			<label class="control-label">Barang</label>	
	  			<select name="id_barangs" class="form-control">
	  				<option>Pilih Barang</option>
	  				@foreach($barangs as $data)
	  				<option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
	  				@endforeach
	  			</select>
	  			@if ($errors->has('id_barangs'))
	                <span class="help-block">
	                    <strong>{{ $errors->first('id_barangs') }}</strong>
	                </span>
	            @endif
	  		</div>


			<div class="form-group {{$errors->has('jumlah') ? 'has-error' : '' }}">
				<label class="control-label">Jumlah</label>
				<input type="number"  name="jumlah" class="form-control" required>
				@if ($errors->has('jumlah'))
				<span class="help-block"><strong>{{ $errors->first('jumlah') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{ $errors->has('id_users') ? ' has-error' : '' }}">
	  			<label class="control-label">Nama User</label>	
	  			<select name="id_users" class="form-control">
	  				<option>Pilih user</option>
	  				@foreach($users as $data)
	  				<option value="{{ $data->id }}">{{ $data->name }}</option>
	  				@endforeach
	  			</select>
	  			@if ($errors->has('id_users'))
                    <span class="help-block">
                        <strong>{{ $errors->first('id_users') }}</strong>
                    </span>
                @endif
	  		</div>

			<div class="from-group">
				<button type="submit" class="btn btn-primary">Tambah</button>
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



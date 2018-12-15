@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header"><b>Tambah Barang </b>
		<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
		</div>
	</div>
	<div class="card-body">
		<form action="{{ route('barang.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			
			
			<div class="form-group {{$errors->has('subtotal') ? 'has-error' : '' }}">
				<label class="control-label">Subtotal</label>
				<input type="text"  name="subtotal" class="form-control" required>
				@if ($errors->has('subtotal'))
				<span class="help-block"><strong>{{ $errors->first('subtotal') }}</strong></span>
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



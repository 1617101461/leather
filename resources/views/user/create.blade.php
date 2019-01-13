@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header"><b>Tambah Artikel </b>
		<div class="card-title pull-right"><a href="{{ url()->previous() }}"><button type="submit" class="btn btn-primary">Kembali</button></a>
		</div>
	</div>
	<div class="card-body">
		<form action="{{ route('artikel.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input  id="name" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                         @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}" required autofocus">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password_confirmation" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
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



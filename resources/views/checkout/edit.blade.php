@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit CheckOut
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}"><button type="submit" class="btn btn-primary">Kembali</button></a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('checkout.update',$checkouts->id) }}" method="post"  enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
			  			<label class="control-label">First Name</label>	
			  			<input type="text" name="first_name" class="form-control" value="{{ $checkouts->first_name }}"  required>
			  			@if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
			  			<label class="control-label">Last Name</label>	
			  			<input type="text" name="last_name" class="form-control" value="{{ $checkouts->last_name }}"  required>
			  			@if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
			  			<label class="control-label">Company Name</label>	
			  			<input type="text" name="company_name" class="form-control" value="{{ $checkouts->company_name }}"  required>
			  			@if ($errors->has('company_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('company_name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
			  			<label class="control-label">Phone Number</label>	
			  			<input type="text" name="phone_number" class="form-control" value="{{ $checkouts->phone_number }}"  required>
			  			@if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email_address') ? ' has-error' : '' }}">
			  			<label class="control-label">Email Address</label>	
			  			<input type="text" name="email_address" class="form-control" value="{{ $checkouts->email_address }}"  required>
			  			@if ($errors->has('email_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email_address') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
			  			<label class="control-label">Country</label>	
			  			<input type="text" name="country" class="form-control" value="{{ $checkouts->country }}"  required>
			  			@if ($errors->has('country'))
                            <span class="help-block">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
			  			<label class="control-label">Address</label>	
			  			<input type="text" name="address" class="form-control" value="{{ $checkouts->address }}"  required>
			  			@if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('town') ? ' has-error' : '' }}">
			  			<label class="control-label">Town/City</label>
			  			<textarea id="text" type="ckeditor" name="town" class="ckeditor"required> {{ $checkouts->town}}
			  			</textarea>
			  			@if ($errors->has('town'))
                            <span class="help-block">
                                <strong>{{ $errors->first('town') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('district') ? ' has-error' : '' }}">
			  			<label class="control-label">District</label>	
			  			<input type="text" name="district" class="form-control" value="{{ $checkouts->district }}"  required>
			  			@if ($errors->has('district'))
                            <span class="help-block">
                                <strong>{{ $errors->first('district') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('post_code') ? ' has-error' : '' }}">
			  			<label class="control-label">Post Code</label>	
			  			<input type="text" name="post_code" class="form-control" value="{{ $checkouts->post_code }}"  required>
			  			@if ($errors->has('post_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('post_code') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
			  			<label class="control-label">Notes</label>	
			  			<input type="text" name="notes" class="form-control" value="{{ $checkouts->notes }}"  required>
			  			@if ($errors->has('notes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notes') }}</strong>
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
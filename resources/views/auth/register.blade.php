@extends('layouts.login')
@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('assets/frontend/images/FB_IMG_15361098794607620.png');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                <form class="login100-form validate-form">
                    <div class="login100-form-avatar">
                        <img src="assets/frontend/images/FB_IMG_15361098794607620.png" alt="">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        AS LEATHER
                    </span>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Name">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                                <input id="name" type="name" class="input100" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Enter password">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                                <input id="password" type="password" class="input100" name="password" value="{{ old('password') }}" placeholder="password" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Enter password">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" value="{{ old('password') }}" placeholder="password" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="container-login100-form-btn p-t-10">
                        
                        <button class="login100-form-btn">
                            {{ __('Register') }}
                        </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

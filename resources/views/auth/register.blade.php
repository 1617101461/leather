<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="/lori/image/png" href="/lori/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/lori/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/lori/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/lori/css/util.css">
    <link rel="stylesheet" type="text/css" href="/lori/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/lori/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('register') }}">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>
                    @csrf
                    <span class="login100-form-title p-b-34 p-t-27">
                        {{ __('Register') }}
                    </span>

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


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                             {{ __('Register') }}
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="/lori/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="/lori/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="/lori/vendor/bootstrap/js/popper.js"></script>
    <script src="/lori/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="/lori/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="/lori/vendor/daterangepicker/moment.min.js"></script>
    <script src="/lori/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="/lori/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="/lori/js/main.js"></script>

</body>
</html>
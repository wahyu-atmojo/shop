{{-- @extends('layouts.app')

@section('content') --}}
<html lang="en">
<head>
    <title>UD. Tumbuh Jati</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css') }}">
<!--===============================================================================================-->
</head>

<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('_postlogin') }}">
                        @csrf

                    <span class="login100-form-title p-b-32">
                        Account Login
                    </span>

                    <span class="txt1 p-b-11">
                        {{ __('E-Mail Address') }}
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
                        {{ __('Password') }}
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-checkbox100" for="ckb1">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="txt3">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/js/main.js') }}"></script>

</body>
</html>
{{-- @endsection --}}

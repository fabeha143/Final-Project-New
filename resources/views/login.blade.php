<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Good Health Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- Custom Css -->
<link rel="stylesheet" href="/css/main.css"/>

</head>

<body class="theme-cyan authentication">
<div class="container d-flex row">
    <div class="card-top"></div>
    <div class="card col-lg-12">
        <h1 class="title"><span>Good Health Hospital</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="body">
            <form method="POST" action="{{ route('loginA') }}">
                @csrf
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <span class="text-danger">@error('email') {{ $message}} @enderror</span>
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                    <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                        <span class="text-danger">@error('password') {{ $message}} @enderror</span>
                    </div>
                </div>
                <div>
                    <div class="">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <label for="rememberme">Remember Me</label>
                    </div> 
                    <div class="text-center">
                        <x-button class="btn btn-primary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<script src="/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Good Hospital Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- Custom Css -->
<link rel="stylesheet" href="/css/main.css"/>

</head>

<body class="theme-cyan authentication">
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Good Health Hospital</span>Forgot Password? <div class="msg">Enter your e-mail address below to reset your password.</div></h1>
        <div class="body">
            <form>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>              
                <div class="row">                    
                    <div class="col-sm-12 text-center">
                        <a href="#" class="btn btn-raised waves-effect g-bg-cyan">RESET MY PASSWORD</a>
                    </div>
                    <div class="col-sm-12 text-center"> <a href="{{ url('/login')}}">Sign In!</a> </div>
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

<!-- Mirrored from thememakker.com/templates/swift/hospital/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 16:01:24 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Good Health</title>

    <link rel="icon" href="/images/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,900;1,500;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/cube-portfolio.min.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/css/slicknav.min.css">

    <link rel="stylesheet" href="/css/maginific-popup.min.css">

    <link rel="stylesheet" href="/css/animate.min.css">

    <link rel="stylesheet" href="/css/nice-select.css">

    <link rel="stylesheet" href="/css/datepicker.css">

    <link rel="stylesheet" href="/css/fontawesome.min.css">

    <link rel="stylesheet" href="/css/icofont.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/default.css">
    <script src="https://kit.fontawesome.com/f3c805f265.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- <div class="preloader">
    <div class="loader-container">
        <div class="loader"></div>
    </div>
</div> -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-12">
                    <ul class="top-link">
                        <li><a href="{{ url('/loginpatient') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-12">

                    <div class="topbar-content">
                        <ul class="topbar-detail">
                            <li><i class="fas fa-map-marker-alt"></i><span>Address:</span>PAF Kiet Pakistan</li>
                            <li><i class="fas fa-phone"></i><span>(24/7 Helpline)</span>0300 2529850</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <header class="header">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-2 col-12 my-auto">
                    <div class="top-logo">
                        <a href="index.html"><img src="images/logo.png" alt="logo.png"></a>
                    </div>
                    <div class="mobile-nav"></div>
                </div>

                <div class="col-lg-9 col-md-10 col-12">
                    <div class="main-menu-top">

                        <div class="main-menu">
                            <div class="navbar">
                                <div class="nav-item">

                                    <ul class="nav-menu mobile-menu navigation">
                                        <li class="active"><a href="{{ url('/home') }}">Home</a>
                                        </li>
                                        <li><a href="{{ url('/Department') }}">Department</a>
                                        </li>
                                        <li><a href="{{ url('/service') }}">Services</a>
                                        </li>
                                        
                                        <li><a href="#">Doctors<i class="fas fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/Doctor') }}">Doctor</a></li>
                                                <li><a href="{{ url('/DoctorDetail') }}">Doctor Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/faq') }}">Faq</a>
                                        </li>
                                        <li><a href="{{ url('/contactus') }}">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="h-menu-right">
                            <a href="{{ url('/Appointment') }}" class="theme-btn">Appointment</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>


@yield('websitecontent')





<footer class="footer-area">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">

                    <div class="footer-top-inner">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-widget">
                                    <div class="footer-about">

                                        <div class="footer-logo">
                                            <a href="index.html"><img src="/images/logo-white.png" alt="footer-logo"></a>
                                        </div>
                                        <div class="footer-a-content">
                                            <p>We are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            <ul class="footer-social">
                                                <li><a href="https://www.facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com" target="blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-widget footer-q-links">

                                    <div class="f-widget-title">
                                        <h3>Quick Links</h3>
                                        <img src="/images/footer-title-img.png" alt="#">
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Our Services</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Faq</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-widget footer-service">

                                    <div class="f-widget-title">
                                        <h3>Our Department</h3>
                                        <img src="/images/footer-title-img.png" alt="#">
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Cardiology</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Neurology</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Dental Care</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Eye Care</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Pediatric Care </a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i>Emergency</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-widget footer-contact">

                                    <div class="f-widget-title">
                                        <h3>Open Hours</h3>
                                        <img src="/images/footer-title-img.png" alt="#">
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                    <ul class="f-contact-inner">
                                        <li><b>Friday - Monday</b><span>7.00-22.00</span></li>
                                        <li><b>Sunday</b><span>10.00-20.30</span></li>
                                        <li><b>Saturday - Monday</b><span>8.00-21.0</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="copyright">
        <div class="container">
            <div class="copyright-box">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="c-left-content">
                            <p>&copy; Copyright 2021 <a href="#">MEDICARE</a> All rights reserved.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="c-right-content">
                            <a href="#">Support Center</a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>


<script src="/js/jquery.js"></script>

<script src="/js/bootstrap.bundle.min.js"></script>

<script src="/js/bootstrap-datepicker.js"></script>

<script src="/js/modernizer.min.js"></script>

<script src="/js/magnific-popup.min.js"></script>

<script src="/js/waypoints.min.js"></script>

<script src="/js/jquery.counterup.min.js"></script>

<script src="/js/owl.carousel.min.js"></script>

<script src="/js/cube-portfolio.min.js"></script>

<script src="/js/nice-select.min.js"></script>

<script src="/js/wow.min.js"></script>

<script src="/js/jquery.slicknav.min.js"></script>
<script src="/js/steller.min.js"></script>

<script src="/js/easing.min.js"></script>

<script src="/js/jquery.scrollUp.min.js"></script>

<script type="text/javascript" src="/js/index.js"></script>
</body>


</html>
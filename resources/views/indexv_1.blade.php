<html lang="zxx" >
<head >
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" >
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css" >
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css" >
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css" >
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" >
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" >
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" >
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" >
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" >
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" >
    <title >Home At Doctor</title >
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" >
    <style type="text/css" >
        .social-link .bx {
            padding-top: 10px !Important
        }

        .top-btn .bx {
            padding: 10px !important;
        }

        header {

            position: relative;
            background-color: black;
            /*height: 75vh;*/
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.2;
            z-index: 1;
        }

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }

        .nav-item1 {
            text-align: right;
        }
    </style >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    <style >
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            position: relative;
        }

        .topnav #myLinks {
            display: none;
        }

        .topnav a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            display: block;
        }

        .topnav a.icon {
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav a:hover {
            color: black;
        }

        .active {
            color: white;
        }


        .akram {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.7);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .amiakram {
            position: relative;
            top: 5%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .akram a {
            padding: 4px;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .akram a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .akram .closebtn {
            position: absolute;
            top: 5px;
            /*padding: 0px !Important;*/
            right: 45px;
            font-size: 60px;
        }
    </style >
</head >
<body >

<!-- Start Navbar Area -->
<div class="navbar-area" >
    <!-- Menu For Mobile Device -->
    <!-- Menu For Desktop Device -->
    <!-- <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </nav>
        </div>
    </div> -->
    <script >
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
            document.getElementById("navOpenbtn").style.display = "none";
            document.getElementById("compname").style.display = "none";

        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
            document.getElementById("navOpenbtn").style.display = "block";
            document.getElementById("compname").style.display = "block";

        }
    </script >
    <div class="side-nav-responsive" >
        <div class="container" >
            <div class="container" >
                <div class="side-nav-inner" >
                    <div class="side-nav justify-content-center align-items-center" >
                        <div class="side-item" >
                            <div class="option-item" >
                                <i class='search-btn bx bx-search' ></i >
                                <i class='close-btn bx bx-x' ></i >
                                <div class="search-overlay search-popup" >
                                    <div class='search-box' >
                                        <form class="search-form" >
                                            <input class="search-input" name="search" placeholder="Search" type="text" >
                                            <button class="search-button" type="submit" >
                                                <i class="bx bx-search" ></i >
                                            </button >
                                        </form >
                                    </div >
                                </div >
                            </div >
                            <div class="option-item" >
                                <div class="add-cart-btn" >
                                    <a href="#" class="cart-btn-icon" >
                                        <i class='bx bx-shopping-bag' ></i >
                                        <span >0</span >
                                    </a >
                                </div >
                            </div >
                        </div >
                    </div >
                </div >
            </div >
        </div >
    </div >
</div >
<!-- End Navbar Area -->
<div style="position: absolute;top: 50;right: 60; z-index: 999; " id="navOpenbtn" >
    <a href="javascript:void(0);" class="icon text-right" id="navOpenbtn" onclick="openNav()" >
        <i class="fa fa-bars " style="color: white; font-size: 30px" ></i ></a >
</div >
<div class="logo_index logo_ " style="" id="logo_" >
    <a class="navbar-brand" href="index.html" >
        <img src="assets/img/logo___-.png" alt="Logo" >
    </a >
</div >
<div class="text-center" style="position: absolute; left: 0;right: 0; top: 250;  z-index: 3;" id="compname" >
    <h1 class="text-white" ></h1 >
</div >
<!-- Top Header Start -->
<header >
    <div class="overlay" ></div >
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4" >
    </video >
    <div class="container h-100" >
        <div class="d-flex h-100 text-center align-items-center" >
            <div class="w-100 text-white" >
                <!--  <h1 class="display-3">Video Header</h1>
                 <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p> -->
                <div id="myNav" class="akram" onclick="closeNav();" >
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a >
                    <div class="amiakram" >
                        <ul class="navbar-nav m-auto" style="width: 30%" >
                            <li class="nav-item" >
                                <a href="{{ url('/') }}" class="nav-link active" >
                                    Home
                                </a >
                            </li >
                           
                           
                            <li class="nav-item" >
                                <a href="{{ url('/doctorlist') }}" class="nav-link" >
                                    Doctor List
                                </a >
                            </li >
                            
                            <li class="nav-item" >
                                <a href="{{ url('/register') }}" class="nav-link" >
                                    Signup
                                </a >
                            </li >
                            <li class="nav-item" >
                                <a href="{{ url('/about') }}" class="nav-link" >
                                    About Us
                                </a >
                            </li >
                            <li class="nav-item" >
                                <a href="{{ url('/contact') }}" class="nav-link" >
                                    Contact Us
                                </a >
                            </li >
                            <li class="nav-item" >
                                <a href="{{ url('/login') }}" class="nav-link" >
                                    Sign In
                                </a >
                            </li >
                        </ul >
                    </div >
                </div >
            </div >
        </div >
    </div >
</header >


<!-- Jquery Min JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js" ></script >
<!-- Popper Min JS -->
<script src="assets/js/popper.min.js" ></script >
<!-- Bootstrap Min JS -->
<script src="assets/js/bootstrap.min.js" ></script >
<!-- Magnific Popup Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js" ></script >
<!-- Owl Carousel Min JS -->
<script src="assets/js/owl.carousel.min.js" ></script >
<!-- Nice Select Min JS -->
<script src="assets/js/jquery.nice-select.min.js" ></script >
<!-- Wow Min JS -->
<script src="assets/js/wow.min.js" ></script >
<!-- Meanmenu JS -->
<script src="assets/js/meanmenu.js" ></script >
<!-- Datepicker JS -->
<script src="assets/js/datepicker.min.js" ></script >
<!-- Ajaxchimp Min JS -->
<script src="assets/js/jquery.ajaxchimp.min.js" ></script >
<!-- Form Validator Min JS -->
<script src="assets/js/form-validator.min.js" ></script >
<!-- Contact Form JS -->
<script src="assets/js/contact-form-script.js" ></script >
<!-- Custom JS -->
<script src="assets/js/custom.js" ></script >
</body >
</html >